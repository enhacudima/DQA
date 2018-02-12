<?php

namespace App\Http\Controllers;

use App\QuestionarioDic;
use App\Questionario;
use App\QuestionarioGeral;
use App\QuestionarioStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigo =  DB::table('questionario')
            ->where('categoria', 'stock_parte_1')
            ->max('codigo');

        $questoes=QuestionarioDic::where([
            ['titulo_questionario', 'stock']
        ])->get();
        return view('admin.questionario',compact(['questoes','codigo']));
    }

    public function store(Request $request)
    {
        $data = $request->cabecalho;

        $questionario = QuestionarioGeral::updateOrCreate(
            [
                'franquia_id' => $data['franquia_id'],
                'data_dqa' => $data['data_DQA'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_Fim'],
                'questao' => $request->questao,
                'codigo' => $request->codigo,
                'categoria' => $request->categoria
            ],
            [
                'questao' => $request->questao,
                'resposta' => $request->resposta,

                'franquia_id' => $data['franquia_id'],
                'data_dqa' => $data['data_DQA'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_Fim'],
                'user_id' => $data['user_id']
            ]
        );
    }
}
