<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Salesforce;
use Illuminate\Http\Request;

class SalesforceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.salesforce',compact('produtos'));
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
        $main_form = $request->main_form;

        $salesforce = Salesforce::create([
            'produtos_id' => $request->produtos_id,
            'saldo_inicial' => $request->saldo_inicial,
            'entradas' => $request->entradas_bin_card,
            'saidas' => $request->saidas,
            'stock_balance' => $request->stock_balance,
            'comentario' => $request->comentario,

            'franquia_id' => $data['franquia_id'],
            'data_dqa' => $data['data_DQA'],
            'data_inicio' => $data['data_inicio'],
            'data_fim' => $data['data_Fim'],
            'user_id' => $data['user_id']
        ]);

        return $salesforce;
    }


    public function getAll(Request $request)
    {
        $data = $request->data;

        $salesforce = Salesforce::where([
            ['data_dqa', $data['data_DQA']],
            ['data_inicio', $data['data_inicio']],
            ['data_Fim', $data['data_Fim']]
        ])->get();

        return $salesforce;
    }
}