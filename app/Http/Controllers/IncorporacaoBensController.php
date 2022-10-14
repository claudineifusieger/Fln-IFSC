<?php

namespace App\Http\Controllers;

use App\Models\IncorporacaoBens;
use Illuminate\Http\Request;

class IncorporacaoBensController extends Controller
{

    public function index()
    {
        $incorporacao = Incorporacao::get();
        //dd($incorporacao);
        return view('incorporacao.index', compact('incorporacao'));
    }

    public function create()
    {
        return view('incorporacao.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(IncorporacaoBens $incorporacaoBens)
    {
        //
    }

    public function edit(IncorporacaoBens $incorporacaoBens)
    {
        //
    }

    public function update(Request $request, IncorporacaoBens $incorporacaoBens)
    {
        //
    }

    public function destroy(IncorporacaoBens $incorporacaoBens)
    {
        //
    }
}
