<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $nome = "Mesaque";
    $idade = 18;
    $profissao = "Desenvolvedor Web";

    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

Route::get('/contato', function() {
    return view('contato');
});

Route::get('/produtos', function() {
    return view ('produtos');
});
