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


//rotas
Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function() { return 'e'; })->name('site.login');

//sub rotas
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'teste'; })->name('site.clientes');;
    Route::get('/fornecedores', function(){ return 'teste'; })->name('site.fornecedores');;
    Route::get('/produtos', function(){ return 'teste'; })->name('site.produtos');;
});

//routas redurect
Route::get('/rota1', function() {
    return 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function() {
    return rediect()->route('site.rota1');
})->name('site.rota2');

//fallback
Route::fallback(function() {
    echo 'A rota nao existe. <a href="'.route('site.index').'">Clique aqui</a>';
});

//
Route::get('/teste/{p1}/{p2}', 'TesteController@teste') ->name('teste');
