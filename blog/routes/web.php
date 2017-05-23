<?php

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
    return view('index');
});

Route::get('/formulario', 'LeadController@index')->name('formulario');
Route::post('/formulario', 'LeadController@postLead');

Route::get('/sonho/e-se-mesmo-com-a-crise-voce-pudesse-viajar', 'ContentController@mostraCriseSePudesse');
Route::get('/democratizacao/realizar-sonho-em-tempo-de-crise', 'ContentController@mostraDemocratizacaoRealizarSonho');
Route::get('/democratizacao/tipo-emprestimo', 'ContentController@mostraDemocratizacaoTipoEmprestimo');
Route::get('/negocios/5-passos-para-abrir-seu-negocio', 'ContentController@mostraCincoPassos');
