<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionarioStock extends Model
{
    protected $table = 'questionario_stocks';

    protected $fillable = [
        'questao', 'resposta','user_id',
    ];
}
