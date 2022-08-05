<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaudoController; 



Route::get('/' , function () {return view('welcome');});

//Route::resource('laudo', LaudoController::class);


Route::get('/6', function () {return view('parecer.formresp');})->name('parecer.formresp');
Route::get('/7', function () {return view('parecer.formresp2');})->name('parecer.formresp2');

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
    Route::get('/laudotecnico', function () {return view('laudotecnico');})->name('laudotecnico');
    Route::post('/createPDF_laudotecnico', [LaudoController::class, 'createPDF_laudotecnico'])->name('createPDF_laudotecnico');
    Route::get('/timbrado', [LaudoController::class, 'timbrado'])->name('timbrado'); 
});
