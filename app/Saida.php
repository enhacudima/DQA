<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantidade', 'mes', 'comentario', 'user_id', 'produto_id', 'franquia_id'
    ];
}
