<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senhass extends Model
{
    protected $table = 'senhas';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'ffisica','mfisica','user_id',
    ];
}
