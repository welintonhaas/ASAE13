<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primarykey = 'id';

    function clientes()
    {
        return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }
}