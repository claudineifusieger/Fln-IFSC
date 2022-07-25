<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class LaudoController extends Controller
{
    public function laudo(Request $request)
    {
        $data = $request->all();
        //dd($data);

        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   // ajusta a data para padrao brasileiro
        date_default_timezone_set('America/Sao_Paulo');                           // seta o time zone 

        return view('test33', compact('data'));
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
