<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaudoController; 
use App\Http\Controllers\LaudoTecnicoController; 
use App\Http\Controllers\IncorporacaoBensController; 
use App\Http\Controllers\ResponsabilidaLabsController; 



Route::get('/' , [LaudoController::class, 'entrar'])->name('entrar');  // tela de login
Route::get('/t', [LaudoController::class, 'timbrado'])->name('t'); 
Route::get('/ip' , function () {return view('ip');})->name('ip');  // ver ip é hostname do cliente
Route::get('/csv', [LaudoController::class, 'csv'])->name('csv'); 
Route::get('/r', [ResponsabilidaLabsController::class, 'show'] )->name('resplab.show');

//Rotas comuns
Route::get('/' , [LaudoController::class, 'entrar'])->name('entrar');  // tela de login
Route::get('/ip' , [LaudoController::class, 'ip'])->name('ip'); // ver ip é hostname do cliente
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});

// Rotas para laudos tecnicos
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/laudo', [LaudoTecnicoController::class, 'index'] )->name('laudo.index');
    Route::get('/laudo/create', [LaudoTecnicoController::class, 'create'])->name('laudo.create');
    Route::get('/laudo/{id}', [LaudoTecnicoController::class, 'show'] )->name('laudo.show');
    Route::post('/laudo/', [LaudoTecnicoController::class, 'store'] )->name('laudo.store');
});

// Rotas para Incorpoação de bem
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/incorporacao', [IncorporacaoBensController::class, 'index'] )->name('incorporacao.index');
    Route::get('/incorporacao/create', [IncorporacaoBensController::class, 'create'])->name('incorporacao.create');
    Route::get('/incorporacao/{id}', [IncorporacaoBensController::class, 'show'] )->name('incorporacao.show');
    Route::post('/incorporacao/', [IncorporacaoBensController::class, 'store'] )->name('incorporacao.store');
});

// Rotas para responsabilidade de Laboratorio
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/resplab', [ResponsabilidaLabsController::class, 'index'] )->name('resplab.index');
    Route::get('/resplab/create', [ResponsabilidaLabsController::class, 'create'])->name('resplab.create');
    Route::get('/resplab/{id}', [ResponsabilidaLabsController::class, 'show'] )->name('resplab.show');
    Route::post('/resplab/', [ResponsabilidaLabsController::class, 'store'] )->name('resplab.store');
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