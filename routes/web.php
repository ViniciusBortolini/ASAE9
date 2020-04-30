<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/*Cliente*/
Route::get('/cliente/cadastro', 'ClientesController@telaCadastro')->name('cliente_cadastro');
Route::post('/cliente/incluir', 'ClientesController@incluir')->name('cliente_add');
Route::get('/cliente/listar', 'ClientesController@listar')
->name('cliente_listar');
Route::get("/cliente/alterar/{id}", "ClientesController@telaAlteracao")->name('cliente_tela_alterar');
Route::post("/cliente/alterar/{id}", "ClientesController@alterar")->name('cliente_alterar');
Route::get('/cliente/excluir/{id}', "ClientesController@excluir")->name('cliente_delete');

/*Vendas*/
Route::get('/venda/cadastro', 'VendasController@telaCadastro')->name('venda_cadastro');;
Route::post('/venda/cadastro', 'VendasController@incluir')->name('venda_add');
Route::get('/venda/listar', 'VendasController@listar')
->name('venda_listar');
Route::get('/venda/cliente/{id}', 'VendasController@vendasPorCliente')->name('vendas_cliente');

/*Login*/
Route::get('/tela_login', 'AppController@tela_login')->name('tela_login');
Route::get('/logout', 'AppController@logout')->name('logout');
Route::post('/login', 'AppController@login')->name('logar');

Route::get('/venda/{id}/itens', 'VendasController@itensVendas')->name('vendas_itens');

Route::get('/venda/{id}/itens/novo', 'VendasController@telaAdicionarItem')->name('vendas_item_novo');
Route::post('/venda/{id}/itens/adicionar', 'VendasController@adicionarItem')->name('vendas_item_add');

Route::get('/venda/{id}/itens/remover/{id_pivot}','VendasController@excluirItem')->name('vendas_item_delete');
?>