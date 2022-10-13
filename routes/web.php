<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaudoController; 
use App\Http\Controllers\LaudoTecnicoController; 



Route::get('/' , function () {return view('welcome');})->name('welcome');

//Route::resource('laudo', LaudoController::class);


Route::get('/6', function () {return view('parecer.formresp');})->name('parecer.formresp');
Route::get('/7', function () {return view('parecer.formresp2');})->name('parecer.formresp2');

//Rotas comuns
Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/timbrado', [LaudoController::class, 'timbrado'])->name('timbrado'); 
});

// Rotas para laudos tecnicos
Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/laudo', [LaudoTecnicoController::class, 'index'] )->name('laudo.index');
    Route::get('/laudo/create', [LaudoTecnicoController::class, 'create'])->name('laudo.create');
    Route::get('/laudo/{id}', [LaudoTecnicoController::class, 'show'] )->name('laudo.show');
    Route::post('/laudo/', [LaudoTecnicoController::class, 'store'] )->name('laudo.store');
});


/*
// exemplo de rotas do crud criadas manualmente

Route::get('/aluno/{id}/edit','AlunoController@edit')->name('alunos.edit');
Route::get('/aluno/create','AlunoController@create')->name('alunos.create');
Route::get('/aluno/{id}','AlunoController@show')->name('alunos.show');
Route::get('/aluno','AlunoController@index')->name('alunos.index');
Route::post('/aluno/','AlunoController@store')->name('alunos.store');
Route::put('/aluno/{id}','AlunoController@update')->name('alunos.update');
Route::delete('/aluno/{id}','AlunoController@destroy')->name('alunos.destroy');

*/