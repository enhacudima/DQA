<?php

namespace App\Http\Controllers;

use App\Salesforce;
use App\Senhass;
use Illuminate\Http\Request;

class SenhasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.senha');
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

    public function store(Request $request)
    {
       $data = $request->data;


        $senhas = Senhass::create([

            'ffisica' => $request->ffisica,
            'mfisica' => $request->mfisica,
            'franquia_id' => $data['franquia_id'],
            'data_dqa' => $data['data_DQA'],
            'data_inicio' => $data['data_inicio'],
            'data_fim' => $data['data_Fim'],
            'user_id' => $data['user_id']
        ]);


        return $senhas;
    }


    public function getAll(Request $request)
    {
        $data = $request->data;

        $sehas = Senha::where([
            ['data_dqa', $data['data_DQA']],
            ['data_inicio', $data['data_inicio']],
            ['data_Fim', $data['data_Fim']]
        ])->get();

        return $sehas;
    }
}
