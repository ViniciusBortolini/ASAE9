<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected  $table = 'vendas';
    protected $primaryKey = 'id';

        function cliente(){
    	return $this->belongsTo('App\Clientes', 'id_cliente', 'id');
    }
}
