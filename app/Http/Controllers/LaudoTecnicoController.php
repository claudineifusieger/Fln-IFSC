<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\LaudoTecnico;
use Illuminate\Http\Request;

class LaudoTecnicoController extends Controller
{

    public function index()
    {
        $laudos = LaudoTecnico::get();
        //dd($laudos);
        return view('laudo.index', compact('laudos'));
    }

    public function create()
    {
        return view('laudo.create');
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
        }  

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
        date_default_timezone_set('America/Sao_Paulo');                           // seta o time zone 

        $pdfnome = $data['numeroPatrimonio'].".pdf"; 
        $pdfnomeArquivo = 'storage/laudos_pdf/'.$request->numeroPatrimonio.date('d-m-y').'.pdf'; 

        $laudo = new LaudoTecnico;
        $laudo->patrimonio = $data['numeroPatrimonio'];
        $laudo->url = $pdfnomeArquivo;
        $laudo->save();


        view()->share('laudos_pdf', compact('data')); 
        $pdf = PDF::loadView('laudo.show',  compact('data'))->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        if (file_exists($pdfnomeArquivo) ){
            return response()->file($pdfnomeArquivo);
        }else{
            $pdf->save($pdfnomeArquivo);
            return $pdf->stream($pdfnome);
        }

        
    }

    public function show(LaudoTecnico $laudoTecnico)
    {
        //
    }

    public function edit(LaudoTecnico $laudoTecnico)
    {
        //
    }

    public function update(Request $request, LaudoTecnico $laudoTecnico)
    {
        //
    }

    public function destroy(LaudoTecnico $laudoTecnico)
    {
        //
    }
}
