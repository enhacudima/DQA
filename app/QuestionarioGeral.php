<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionarioGeral extends Model
{
    protected $table = 'questionario';

    protected $fillable = [
        'franquia_id', 'data_dqa', 'data_inicio', 'data_fim', 'questao', 'resposta', 'codigo', 'categoria','user_id',
    ];
}
