<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected  $table = 'clientes';
    protected $primaryKey = 'id';

     	function vendas(){
 		return $this->hasMany('App\Vendas', 'id_cliente', 'id');
 	}
}
