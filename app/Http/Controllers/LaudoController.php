<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\LaudoTecnico;
use App\Models\IncorporacaoBens;
use PDF; 

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

    public function timbrado(Request $request)
    {        
        
        view()->share('timbrado'); 
        $pdf = PDF::loadView('timbrado')->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        //return $pdf->stream('nome-do-arquivo-pdf.pdf',compact('pdf'));

        view()->share('timbrado',compact('pdf')); 
        $pdf = PDF::loadView('timbrado',compact('pdf'))->setOptions([ 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('nome-do-arquivo-pdf.pdf');

    }

    
}
