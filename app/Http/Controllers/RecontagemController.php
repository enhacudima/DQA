<?php

namespace App\Http\Controllers;

use App\Recontagem;
use Illuminate\Http\Request;

class recontagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.recontagem');
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
        $data = $request->data;

                $recontagem = Recontagem::create([
                    'nr_pagina' => $request->nr_pagina,
                    'total' => $request->total,
                    'codigo' => $request->codigo,
                    'transacao' => $data['transacao'],
                    'franquia_id' => $data['franquia_id'],
                    'data_dqa' => $data['data_DQA'],
                    'data_inicio' => $data['data_inicio'],
                    'data_fim' => $data['data_Fim'],
                    'user_id' => $data['user_id']
                ]);
                return $recontagem;
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
