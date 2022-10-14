<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\LaudoTecnico;
use App\Models\IncorporacaoBens;

use PDF; 
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro

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

    public function createPDF_laudotecnico(Request $request) 
    {
        $data = $request->all();
        if ($request->pic1){  
            $extencaoPic1 = $request->pic1->getClientOriginalExtension();
            $data['pic1'] = $request->pic1->storeAs('laudotecnicoIMG', $request->numeroPatrimonio.'_1_'.date('d-m-Y').'.'.$extencaoPic1);  
        }
        if ($request->pic2){  
            $extencaoPic2 = $request->pic2->getClientOriginalExtension();
            $data['pic2'] = $request->pic2->storeAs('laudotecnicoIMG', $request->numeroPatrimonio.'_2_'.date('d-m-Y').'.'.$extencaoPic2);  
        }
        if ($request->pic3){  
            $extencaoPic3 = $request->pic3->getClientOriginalExtension();
            $data['pic3'] = $request->pic3->storeAs('laudotecnicoIMG', $request->numeroPatrimonio.'_3_'.date('d-m-Y').'.'.$extencaoPic3);  
        }  


        $pdfnome = $data['numeroPatrimonio'].".pdf"; 
        $pdfnomeArquivo = 'storage/laudotecnicoPDF/'.$request->numeroPatrimonio.'.pdf'; 

        view()->share('laudotecnicoPDF', compact('data')); 
        $pdf = PDF::loadView('laudotecnicoPDF',  compact('data'))->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        if (file_exists($pdfnomeArquivo) ){
            return response()->file($pdfnomeArquivo);
        }else{
            $pdf->save($pdfnomeArquivo);
            return $pdf->stream($pdfnome);
        }

        
        
    }
    public function timbrado(Request $request)
    {        
        


        view()->share('timbrado'); 
        $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        //return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));

        view()->share('timbrado',compact('pdf')); 
        $pdf = PDF::loadView('timbrado',compact('pdf'))->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('nome-do-arquivo-pdf.pdf');

        



    }
    public function laudo(Request $request)
    {
        $data = $request->all();

        if ($request->pic1){  
            $extencaoPic1 = $request->pic1->getClientOriginalExtension();
            $data['pic1'] = $request->pic1->storeAs('laudotecnico', $request->numeroPatrimonio.'_1_'.date('d-m-Y').'.'.$extencaoPic1);  
        }
        if ($request->pic2){  
            $extencaoPic2 = $request->pic2->getClientOriginalExtension();
            $data['pic2'] = $request->pic2->storeAs('laudotecnico', $request->numeroPatrimonio.'_2_'.date('d-m-Y').'.'.$extencaoPic2);  
        }
        if ($request->pic3){  
            $extencaoPic3 = $request->pic3->getClientOriginalExtension();
            $data['pic3'] = $request->pic3->storeAs('laudotecnico', $request->numeroPatrimonio.'_3_'.date('d-m-Y').'.'.$extencaoPic3);  
        }  
        //dd($data);

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
        date_default_timezone_set('America/Sao_Paulo');                           // seta o time zone 
        return view('laudotecnicoPDF', compact('data'));
    }
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
