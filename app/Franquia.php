<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franquia extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'franquias';

    protected $fillable = [
        'franquia_id', 'province', 'districts', 'user_id','bairro','tipo','modelo','nome','telefone','observacoes','lat','log','enfermeira',
    ];
}
