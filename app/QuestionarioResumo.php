<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionarioResumo extends Model
{
    protected $table = 'questionario_resumos';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'questao', 'resposta','user_id',
    ];
}
