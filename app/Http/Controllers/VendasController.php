<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Vendas;
use App\Produtos;

class VendasController extends Controller{
        
        function telaCadastro(){
        	$c = Clientes::all();

    		return view("tela_cadastro_venda", ["clientes" => $c]);
    	}

	function incluir(Request $req){
		#$valor = $req->input("valor");
		$id_cliente = $req->input('id_cliente');
		
		$venda = new Vendas();
		$venda->valor = 0;#$valor;
		$venda->id_cliente = $id_cliente;
		
		if($venda->save()){
			$retorno =  TRUE;
		}else{
			throw new\Exception("Nao foi possivel incluir");
			die;
		}
		return redirect()->route('vendas_item_novo', ['id' => $venda->id]); 
		//return redirect()->route('venda_listar', ["mensagem"=>$retorno]);
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
		function itensVendas($id){
			$venda= Vendas::find($id);

			return view('lista_itens_vendas', ['venda'=> $venda]);
		}
		function telaAdicionarItem($id){
			$venda = Vendas::find($id);
			$produto = Produtos::all();

			return view('tela_cadastro_itens', ['venda'=>$venda, 'produtos'=>$produto]);
		}

		function adicionarItem(Request $req, $id){
        $id_produto = $req->input('id_produto');
        $quantidade = $req->input('quantidade');

        $produto = Produtos::find($id_produto);
        $venda = Vendas::find($id);
        $subtotal = $produto->preco * $quantidade;

        $colunas_pivot = [
            'quantidade' => $quantidade,
            'subtotal' => $subtotal
        ];

        # Adicionar item à lista e atualizar valor da venda.
        $venda->produtos()->attach($produto->id, $colunas_pivot);
        $venda->valor += $subtotal;
        $venda->save();

        return redirect()->route('vendas_item_novo', 
            ['id' => $venda->id]);
        // $venda->valor = $venda->valor + $subtotal

    }
    function excluirItem($id, $id_pivot){
        $venda = Vendas::find($id);
        $subtotal = 0;

        foreach($venda->produtos as $vp){
            if ($vp->pivot->id == $id_pivot){
                $subtotal = $vp->pivot->subtotal;
                break;
            }
        }

        $venda->valor = $venda->valor - $subtotal; 
        $venda->produtos()->wherePivot('id', '=', $id_pivot)->detach();
        $venda->save();

        return redirect()->route('vendas_item_novo', 
            ['id' => $id]);
    }

}
?>