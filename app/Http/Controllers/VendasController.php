<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Vendas;

class VendasController extends Controller{
	function telaCadastro(){
		return view("tela_cadastro_venda");
	}
	/**
    * Inclui um novo cliente no sistema
    * @param string $cliente Nome do cliente
    * @param string $descricao Descrição da venda
    * @param string $valor Valor da venda
    * @return TRUE\Exception True para inclusao bem sucedida ou Exception para inclusao mal sucedida, ainda será direcionado para a página onde possui as vendas realizadas
    */
	function incluir(Request $req){
		$id_cliente = $req->input('id_cliente');
		$descricao = $req->input("descricao");
		$valor = $req->input("valor");

		$venda = new Vendas();
		$venda->id_cliente = $id_cliente;
		$venda->descricao = $descricao;
		$venda->valor = $valor;

		if($venda->save()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('listar', ["mensagem"=>$retorno]);
	}
	/**
    * Lista os clientes do sistema
    * @param  $clientes Trará todos os clientes
    * @return retorna em cli todos os clientes que estão em $clientes
    */
	function listar(){
		$vendas = Vendas::all();/*coletar todos os clientes*/
		return view("VendasResultado", ["vend" => $vendas]);
	}

	function excluir($id){
		$venda = Vendas::find($id);

		if($venda->delete()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('listar', ["mensagem"=>$retorno]);
	}
}
?>