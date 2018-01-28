<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{

    use SoftDeletes;

    protected $table = 'atividades';

    protected $fillable = [
        'codigo', 'atividade', 'tipo_atividade', 'faixa_etaria', 'user_id'
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
