<?php

namespace App\Http\Controllers;

use App\Contagemfisica;
use App\Produto;
use Illuminate\Http\Request;

class ContagemfisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.contagemfisica', compact('produtos'));
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

                $contagemfisica = Contagemfisica::create([
                    'produtos_id' => $request->produto_id,
                    'contagem_fisica' => $request->contagem_fisica,
                    'comentario' => $request->comentario,

                    'franquia_id' => $data['franquia_id'],
                    'data_dqa' => $data['data_DQA'],
                    'data_inicio' => $data['data_inicio'],
                    'data_fim' => $data['data_Fim'],
                    'user_id' => $data['user_id']
                ]);

        return $contagemfisica;
    }


    public function getAll(Request $request)
    {
        $data = $request->data;

        $contagemfisica = Contagemfisica::where([
            ['data_dqa', $data['data_DQA']],
            ['data_inicio', $data['data_inicio']],
            ['data_Fim', $data['data_Fim']]
        ])->get();

        return $contagemfisica;
    }
}