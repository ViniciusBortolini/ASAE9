<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendas extends Model
{
    use SoftDeletes;
    
    protected  $table = 'vendas';
    protected $primaryKey = 'id';

        function cliente(){
    	return $this->belongsTo('App\Clientes', 'id_cliente', 'id');
    }
    function produtos(){
    	return $this->belongsToMany('App\Produtos', 'produtos_vendas', 'id_venda', 'id_produto')
    	->withPivot(['id', 'quantidade', 'subtotal'])
    	->withTimestamps();
    }
}
