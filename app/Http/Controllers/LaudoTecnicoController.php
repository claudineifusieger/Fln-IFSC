<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\LaudoTecnico;
use App\Models\IncorporacaoBens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaudoTecnicoController extends Controller
{
    protected $laudos;
    protected $incorparacoes;

    public function __construct(LaudoTecnico $laudos,IncorporacaoBens $incorparacoes)
    {
        $this->laudos = $laudos;
        $this->incorparacoes = $incorparacoes;
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
        date_default_timezone_set('America/Sao_Paulo');                           // seta o time zone 
    }
    public function index()
    {
        $laudos = $this->laudos->get();
        //dd($laudos);
        return view('laudo.index', compact('laudos'));
    }

    public function create(Request $request)
    {
        $bem= array();
        if($request['numeroPatrimonio']){
            $data = $request->all();                       //dd($data);
            $patrimonio = $data['numeroPatrimonio'];       //dd($patrimonio);  
            if (($open = fopen(storage_path() . "/app/public/SapBensGrid.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($open, 1000, ",")) !== FALSE) { 
                    if($data[3]==$patrimonio){                 //dd($data);
                        $bem['numeroPatrimonio'] = $data[3];
                        $bem['nome'] = $data[8];
                        $bem['tipoEquipamento'] = 'Código SIAFI: '.$data[7].' |  Descrição: '.$data[6];
                        $bem['marca'] = "pegar no dgp";
                        $bem['modelo'] = "pegar no dgp";
                        $bem['local'] = $data[2];
                        $bem['descricao'] = $data[10];
                        $id = $data[0];
                    }
                }
                fclose($open);
            }
            $ip = "172.16.0.10";
            $ds = ldap_connect($ip);
            $r = ldap_bind($ds);
            $filter = "(displayname=".$bem['nome'].")";
            $cn = ldap_search($ds, "ou=Florianopolis,ou=Usuarios,dc=cefetsc,dc=edu,dc=br", $filter);
            $info = ldap_get_entries($ds, $cn);
            ldap_close($ds);
            for ($i=0; $i<$info["count"]; $i++)      {
                $bem['matriculaSiape'] = $info[$i]["o"]['0'];
                $u = explode(",",($info[$i]["dn"]));          
                $unidade = explode("=",$u[1]);
                $bem['unidade'] =$unidade[1];
            }
            $bem['link']= 'https://dgp.ifsc.edu.br/sigp/index.php?pg=patrimonio&md=patrimonioconsultabenscampus&act=view&id='.$id;
        //dd($bem);
        return view('laudo.create',compact('bem'));
        }else{
            $bem['numeroPatrimonio'] = ''; $bem['nome'] = ''; $bem['tipoEquipamento'] = ''; $bem['marca'] = "pegar no dgp";
            $bem['modelo'] = "pegar no dgp"; $bem['local'] = '';  $bem['descricao'] = '';$bem['matriculaSiape'] = ''; $bem['unidade'] ='';
            $bem['link']= 'https://dgp.ifsc.edu.br/sigp/index.php?pg=patrimonio&md=patrimonioconsultabenscampus';
            return view('laudo.create',compact('bem'));
        }
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->pic1){  
            $extencaoPic1 = $request->pic1->getClientOriginalExtension();
            $data['pic1'] = $request->pic1->storeAs('laudos_img', $request->numeroPatrimonio.'_1_'.date('d-m-Y').'.'.$extencaoPic1);  
        }
        if ($request->pic2){  
            $extencaoPic2 = $request->pic2->getClientOriginalExtension();
            $data['pic2'] = $request->pic2->storeAs('laudos_img', $request->numeroPatrimonio.'_2_'.date('d-m-Y').'.'.$extencaoPic2);  
        }
        if ($request->pic3){  
            $extencaoPic3 = $request->pic3->getClientOriginalExtension();
            $data['pic3'] = $request->pic3->storeAs('laudos_img', $request->numeroPatrimonio.'_3_'.date('d-m-Y').'.'.$extencaoPic3);  
        }                            // seta o time zone 

        $pdfnome = $data['numeroPatrimonio'].".pdf"; 
        $pdfnomeArquivo = 'storage/laudos_pdf/'.$request->numeroPatrimonio.date('d-m-y').'.pdf'; 

        $laudo = new LaudoTecnico;
        $laudo->patrimonio = $data['numeroPatrimonio'];
        $laudo->url = $pdfnomeArquivo;
        $laudo->save();


        view()->share('laudos_pdf', compact('data')); 
        $pdf = PDF::loadView('laudo.show',  compact('data'))->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        if (file_exists($pdfnomeArquivo) ){
            echo ('criar view para avisar que laudo ja foi feito hoje');
        }else{
            $pdf->save($pdfnomeArquivo);
            if ($request->pic3) { Storage::delete($data['pic3']);  }
            if ($request->pic2) { Storage::delete($data['pic2']);  }
            if ($request->pic1) { Storage::delete($data['pic1']);  }
            return $pdf->stream($pdfnome);
        }
        
    }

    public function show(LaudoTecnico $laudoTecnico)
    {
        //
    }

    public function edit($id)
    {
        $laudo = LaudoTecnico::find($id);      //dd($laudo);

        // verifica se consulta retorna algo
        if (!$laudo) { return redirect()->back(); }

        return view('laudo.edit', compact('laudo'));
    }

    public function update(Request $request, $id)
    {
        
        $laudo = LaudoTecnico::find($id);      //dd($laudo);

        // verifica se consulta retorna algo
        if (!$laudo) { return redirect()->back(); }

        $data = $request->all();  
        $pdf = explode("/",($data["url"]));    //dd($pdf);

        
        if ($request->pdf){ 
            Storage::delete('laudos_pdf/'.$pdf[2]); 
            $data['pdf'] = $request->pdf->storeAs('laudos_pdf', $pdf[2]);  
        }
        $laudos = $this->laudos->get();
        //return view('laudo.index', compact('laudos'));
        return redirect()->route('laudo.index', ['laudos'=>$laudos]);
    }

    public function destroy(LaudoTecnico $laudoTecnico)
    {
        //
    }

    
}
