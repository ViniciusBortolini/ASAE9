<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente/cadastro', 'ClientesController@telaCadastro');

Route::post('/cliente/incluir', 'ClientesController@incluir')->name('cliente_add');

Route::get('/cliente/listar', 'ClientesController@listar')
->name('listar');


?>