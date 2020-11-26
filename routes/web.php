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
    // ROTAS GET
	Route::get('/', function () {return view('welcome');});
    Route::get('/produtos/pesquisar', 'ProdutoController@pesquisar');
    Route::get('/produtos/inserir', 'ProdutoController@mostrar_inserir');
    Route::get('/produtos/alterar/{id}', 'ProdutoController@mostrar_alterar');
    Route::get('/produtos/excluir/{id}', 'ProdutoController@excluir');


    // ROTAS POST
    Route::post('/produtos/pesquisar', 'ProdutoController@pesquisar');
    Route::post('/produtos/inserir', 'ProdutoController@inserir');
    Route::post('/produtos/alterar', 'ProdutoController@alterar');



