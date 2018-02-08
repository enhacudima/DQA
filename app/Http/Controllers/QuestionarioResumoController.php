<?php

namespace App\Http\Controllers;

use App\QuestionarioDic;
use Illuminate\Http\Request;

class QuestionarioResumoController extends Controller
{
    public function index()
    {
        $questoes=QuestionarioDic::where([
            ['titulo_questionario', 'resumo']
        ])->get();
        return view('admin.questionarioResumo', compact('questoes'));
    }

    public function store(Request $request)
    {
        $data = $request->cabecalho;

        $questionario = QuestionarioRe::create([
            'questao' => $request->questao,
            'resposta' => $request->resposta,

            'franquia_id' => $data['franquia_id'],
            'data_dqa' => $data['data_DQA'],
            'data_inicio' => $data['data_inicio'],
            'data_fim' => $data['data_Fim'],
            'user_id' => $data['user_id']
        ]);

        return $questionario;
    }
}
