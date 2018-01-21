<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bincard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ntrasacao', 'franquia_id', 'datadqa', 'datainicio', 'datafim', 'saldo_inicial','entradas','saidas','stock_balance','comentario','produto_id','user_id'
    ];
}


