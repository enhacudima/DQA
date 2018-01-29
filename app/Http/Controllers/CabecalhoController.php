<?php

namespace App\Http\Controllers;

use App\cabecalho;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;

class CabecalhoController extends Controller
{
    public function saveCabecalho(Request $request){
        $data = $request->data;
/*
        $cabecalho = cabecalho::create([
            'transacao' => $data['transacao'],
            'franquia_id' => $data['franquia_id'],
            'data_dqa' => $data['data_DQA'],
            'data_inicio' => $data['data_inicio'],
            'data_fim' => $data['data_Fim'],
            'user_id' => $data['user_id']
        ]);
/*

        foreach ($data as $k=> $v) {
            $cabecalho->{$k} = $v;
        }
*/
        //cabecalho::created($data);
        return '$cabecalho';
       // return Responsdata_fime::json('rota para o inferno');
    }
}
