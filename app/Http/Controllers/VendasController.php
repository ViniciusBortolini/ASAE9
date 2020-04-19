<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Vendas;

class VendasController extends Controller{
        
        function telaCadastro(){
        	$c = Clientes::all();
    	
    		return view("tela_cadastro_venda", ["clientes" => $c]);
    	}

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
		return redirect()->route('venda_listar', ["mensagem"=>$retorno]);
	}

	    function vendasPorCliente($id){
        /* $id = id do usuario */
        $cliente = Clientes::find($id);
        
        return view('VendasPorUsuarios', ["clientes" => $cliente]);
    }
    	function listar(){
		$vendas = Vendas::all();/*coletar todos os clientes*/
		return view("VendasResultado", ["vendas" => $vendas]);
	}
}
?>