<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionarioStock extends Model
{
    protected $table = 'questionario_stocks';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'questao', 'resposta','user_id',
    ];
}
