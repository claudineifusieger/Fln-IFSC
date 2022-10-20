<?php

namespace App\Http\Controllers;

use App\Models\ResponsabilidaLabs;
use Illuminate\Http\Request;
use PDF; 

class ResponsabilidaLabsController extends Controller
{
    protected $resplab;

    public function __construct(ResponsabilidaLabs $resplab)
    {
        $this->resplab = $resplab;
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
    }

    public function index()
    {
        $resplabs = $this->resplab->get();
        //dd($resplabs);
        return view('resplab.index', compact('resplabs'));
    }

    public function create()
    {
        return view('resplab.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();  
        $pdfnome = $data['matricula'].".pdf"; 
        $pdfnomeArquivo = 'storage/resplabs_pdf/'.$request->matricula.date('d-m-y').'.pdf'; 

        $resp = new ResponsabilidaLabs;
        $resp->matricula = $data['matricula'];
        $resp->nome = $data['nome'];
        $resp->url = $pdfnomeArquivo;
        $resp->save();

        $resp->soft = $data['soft'];
        $resp->labs = $data['labs'];  //dd($data);


        view()->share('resplabs_pdf', compact('data')); 
        $pdf = PDF::loadView('resplab.show',  compact('data'))->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);

        if (file_exists($pdfnomeArquivo) ){
            echo ('termo ja feito hoje');
        }else{
            $pdf->save($pdfnomeArquivo);
            return $pdf->stream($pdfnome);
        }
    }

    public function show(ResponsabilidaLabs $responsabilidaLabs)
    {
        view()->share('resplab.show'); 
        $pdf = PDF::loadView('resplab.show')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('nome.pdf',compact('pdf'));
    }

    public function edit(ResponsabilidaLabs $responsabilidaLabs)
    {
        //
    }

    public function update(Request $request, ResponsabilidaLabs $responsabilidaLabs)
    {
        //
    }

    public function destroy(ResponsabilidaLabs $responsabilidaLabs)
    {
        //
    }
}
