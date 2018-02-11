<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Senha extends Model
{
    protected $table = 'senhas';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', '$sehas','user_id',
    ];
}
