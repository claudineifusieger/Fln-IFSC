<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\LaudoTecnico;
use App\Models\IncorporacaoBens;
use PDF; 
use Auth;

class LaudoController extends Controller
{
    protected $laudos;
    protected $incorparacoes;

    public function __construct(LaudoTecnico $laudos,IncorporacaoBens $incorparacoes)
    {
        $this->laudos = $laudos;
        $this->incorparacoes = $incorparacoes;
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
    }

    public function entrar()
    {        
        if (Auth::check()) {
            return view('dashboard');
        }else{
            return view('welcome');
        }
    }

    public function ip()
    {      
            return view('ip');
    }

    public function timbrado(Request $request)
    {        
        
        view()->share('timbrado'); 
        $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));

    }

    public function csv()
    {

        if (($open = fopen(storage_path() . "/app/public/SapBensGrid.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) { 

                if($data[3]=='584421'){                 //dd($data);
                    $numeroPatrimonio = $data[3];
                    $name = $data[8]; 
                    $tipoEquipamento = 'Código SIAFI: '.$data[7].' |  Descrição: '.$data[6];
                    $marca = "pegar no dgp";
                    $modelo = "pegar no dgp";
                    $local = $data[2];
                    $descricao = $data[10];
                }
            }
            fclose($open);
        }
        $ip = "172.16.0.10";
        $ds = ldap_connect($ip);
        $r = ldap_bind($ds);
        $filter = "(displayname=".$name.")";
        $cn = ldap_search($ds, "ou=Florianopolis,ou=Usuarios,dc=cefetsc,dc=edu,dc=br", $filter);
        $info = ldap_get_entries($ds, $cn);
        for ($i=0; $i<$info["count"]; $i++)      {
            $matriculaSiape= $info[$i]["o"]['0'];
            $nome =$info[$i]["displayname"]['0'];
            $u = explode(",",($info[$i]["dn"]));          
            $unidade = explode("=",$u[1]);
            $lotacao = $unidade[1]; 
        }
//dd($info);
echo "<pre>";
print_r($info);
echo "</pre>"; echo $matriculaSiape;
    }

    
}




