<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
	use SoftDeletes;

    protected $primaryKey ='id';
    protected $table = 'produtos';

   function vendas(){
    	return $this->belongsToMany('App\Vendas', 'produtos_vendas', 'id_produto', 'id_venda')
    	->withPivot(['quantidade', 'subtotal'])
    	->withTimestamps();
    }
}
