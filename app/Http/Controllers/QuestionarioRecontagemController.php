<?php

namespace App\Http\Controllers;

use App\QuestionarioDic;
use App\QuestionarioStock;
use Illuminate\Http\Request;

class QuestionarioRecontagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questoes=QuestionarioDic::where([
            ['titulo_questionario', 'stock']
        ])->get();
        return view('admin.questionarioRecontagem',compact('questoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->cabecalho;

        $questionario = QuestionarioStock::create([
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
