<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use Auth;

class ClientesController extends Controller{
	function telaCadastro(){
		return view("tela_cadastro_cliente");
	}
	/**
    * Inclui um novo cliente no sistema
    * @param string $nome Nome do cliente
    * @param string $endereco Endereço do cliente
    * @param string $cep CEP do cliente
    * @param string $cidade Cidade do cliente
    * @return TRUE\Exception True para inclusao bem sucedida ou Exception para inclusao mal sucedida, ainda será direcionado para a página onde possui os clientes cadastrados
    */
	function incluir(Request $req){
		$nome = $req->input("nome");
		$endereco = $req->input("endereco");
		$cep = $req->input("cep");
		$cidade = $req->input("cidade");
		$estado = $req->input("estado");

		$cliente = new Clientes();
		$cliente->nome = $nome;
		$cliente->endereco = $endereco;
		$cliente->cep = $cep;
		$cliente->cidade = $cidade;
		$cliente->estado = $estado;

		if($cliente->save()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('cliente_listar', ["mensagem"=>$retorno]);
	}
	/**
    * Lista os clientes do sistema
    * @param  $clientes Trará todos os clientes
    * @return retorna em cli todos os clientes que estão em $clientes
    */
	function listar(){
		
			$clientes = Clientes::all();/*coletar todos os clientes*/
			return view("ClientesResultado", ["cli" => $clientes]);
		
		//return view("tela_login");
	}

	function telaAlteracao($id){
		$clientes = Clientes::find($id);
		return view("tela_alteracao_clientes", ["c" => $clientes]);
	}

	function alterar(Request $req, $id){
		$nome = $req->input('nome');
		$cep = $req->input('cep');
		$estado = $req->input('estado');
		$cidade = $req->input('cidade');
		$endereco = $req->input('endereco');
	

		$cliente = Clientes::find($id);
		$cliente->nome = $nome;
		$cliente->cep = $cep;
		$cliente->estado = $estado;
		$cliente->cidade = $cidade;
		$cliente->endereco = $endereco;

		if($cliente->save()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('cliente_listar', ["mensagem"=>$retorno]);
	}
	function excluir($id){
		$cliente = Clientes::find($id);

		foreach ($cliente->vendas as $v) {
			$v->delete();
		}

		if($cliente->delete()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('cliente_listar', ["mensagem"=>$retorno]);
	}
}
?>