<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recontagem extends Model
{
    use SoftDeletes;

    protected $table = 'recontagems';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'nr_livro', 'data_inicio', 'data_fim', 'nr_pagina', 'total', 'codigo', 'user_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * Get the cabecalho that owns the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
