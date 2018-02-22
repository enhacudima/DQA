<?php

namespace App\Http\Controllers;

use App\contagemfisica;
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->data;
        /*
                $recontagem = Recontagem::create([
                    'nr_pagina' => $request->nr_pagina,
                    'total' => $request->total,
                    'codigo' => $request->codigo,
                    'franquia_id' => $data['franquia_id'],
                    'data_dqa' => $data['data_DQA'],
                    'data_inicio' => $data['data_inicio'],
                    'data_fim' => $data['data_Fim'],
                    'user_id' => $data['user_id']
                ]);
*/
        $recontagem = Recontagem::updateOrCreate(
            [
                'nr_pagina' => $request->nr_pagina,
                'codigo' => $request->codigo,
                'franquia_id' => $data['franquia_id'],
                'data_dqa' => $data['data_DQA'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_Fim'],
                'nr_livro' => $request->nr_livro
            ],
            [
                'nr_pagina' => $request->nr_pagina,
                'total' => $request->total,
                'codigo' => $request->codigo,
                'franquia_id' => $data['franquia_id'],
                'data_dqa' => $data['data_DQA'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_Fim'],
                'nr_livro' => $request->nr_livro,
                'user_id' => $data['user_id']
            ]
        );

        return $recontagem;
    }


    public function getAll(Request $request)
    {
        $data = $request->data;
        $nrPagina = $request->nr_pagina;
        $nr_livro = $request->nr_livro;

        $recontagem = Recontagem::where([
            ['nr_pagina', $nrPagina],
            ['nr_livro', $nr_livro],
            ['data_dqa', $data['data_DQA']],
            ['data_inicio', $data['data_inicio']],
            ['data_Fim', $data['data_Fim']]
            ])->get();

        return $recontagem;
    }
}
