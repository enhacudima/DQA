<?php

namespace App\Http\Controllers;

use App\QuestionarioDic;
use App\QuestionarioGeral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RdqaDController extends Controller
{
    public function index()
    {
        $codigo =  DB::table('questionario')
            ->where('categoria', 'verificacao')
            ->max('codigo');

        $structure=QuestionarioDic::where([
            ['titulo_questionario', 'structure']
        ])->get();

        $indicator=QuestionarioDic::where([
            ['titulo_questionario', 'indicator']
        ])->get();

        $datacollection=QuestionarioDic::where([
            ['titulo_questionario', 'datacollection']
        ])->get();

        $datamanagement=QuestionarioDic::where([
            ['titulo_questionario', 'datamanagement']
        ])->get();

        $linkswith=QuestionarioDic::where([
            ['titulo_questionario', 'linkswith']
        ])->get();

        $useofdata=QuestionarioDic::where([
            ['titulo_questionario', 'useofdata']
        ])->get();

        return view('admin.rdqa',compact(['questoes', 'codigo', 'structure', 'indicator', 'datacollection', 'datamanagement', 'linkswith', 'useofdata']));
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
        return $questionario;
    }
}
