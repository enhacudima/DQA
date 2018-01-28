<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{

    use SoftDeletes;

    protected $table = 'atividades';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'nr_pagina', 'total', 'codigo', 'user_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
