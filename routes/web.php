<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaudoController; 



Route::get('/' , function () {return view('welcome');});
Route::get('/1', function () {return view('test1');})->name('test1');
Route::get('/2', function () {return view('parecer.form');})->name('form');
Route::get('/3', function () {return view('test3');})->name('test3');
Route::get('/33', function () {return view('test33');})->name('test33');
Route::get('/4', function () {return view('blank');})->name('blank');
Route::get('/adm', function () {return view('adm');})->name('adm');
Route::get('/adm1', function () {return view('adm1');})->name('adm1');
Route::get('/adm11', function () {return view('adm11');})->name('adm11');

//Route::resource('laudo', LaudoController::class);

Route::post('/laudo', [LaudoController::class, 'laudo'])->name('laudo');
Route::get('/index', [LaudoController::class, 'index'])->name('index');
Route::post('/createPDF', [LaudoController::class, 'createPDF'])->name('createPDF');

Route::get('/6', function () {return view('parecer.formresp');})->name('parecer.formresp');
Route::get('/7', function () {return view('parecer.formresp2');})->name('parecer.formresp2');
