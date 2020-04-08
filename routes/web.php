<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/cadastro', 'ClientesController@telaCadastro');

Route::post('/cliente/incluir', 'ClientesController@incluir')->name('cliente_add');

Route::get('/cliente/listar', 'ClientesController@listar')
->name('listar');

Route::get("/cliente/alterar/{id}", "ClientesController@telaAlteracao")->name('cliente_tela_alterar');
Route::post("/cliente/alterar/{id}", "ClientesController@alterar")->name('cliente_alterar');

Route::get('/cliente/excluir/{id}', "ClientesController@excluir")->name('cliente_delete');

Route::get('/venda/incluir', 'VendasController@telaCadastro');
Route::post('/venda/incluir', 'VendasController@incluir')->name('venda_add');

Route::get('/venda/listar', 'VendasController@listar')
->name('listar');
?>