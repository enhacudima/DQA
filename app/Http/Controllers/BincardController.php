<?php

namespace App\Http\Controllers;

use App\Bincard;
use App\Produto;
use Illuminate\Http\Request;

class BincardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.bincard',compact('produtos'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->data;

        $binCard = Bincard::create([
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

        return $binCard;
    }


    public function getAll(Request $request)
    {
        $data = $request->data;

        $binCard = Bincard::where([
            ['data_dqa', $data['data_DQA']],
            ['data_inicio', $data['data_inicio']],
            ['data_Fim', $data['data_Fim']]
        ])->get();

        return $binCard;
    }
}