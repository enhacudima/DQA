<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DHIS2 extends Model
{
    protected $table = 'dhis2';

    protected $fillable = [
        'franquia', 'data_dqa', 'data_inicio', 'data_fim', 'atividade', 'idade', 'total', 'user_id', 'franquia_id'
    ];
}
