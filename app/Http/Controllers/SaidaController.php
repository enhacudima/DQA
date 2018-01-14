<?php

namespace App\Http\Controllers;

use App\Saida;
use App\Http\Requests\SaidaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaidaController extends Controller
{
    private $Saida;
    public function __construct(Saida $Saida)
    {
        $this->Saida=$Saida;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Saidas = $this->Saida->all();
        $franquias = DB::table('franquias')->select('id', 'nome')->get();
        $produtos = DB::table('produtos')->select('id', 'nome', 'codigo')->get();
        $entradas = DB::table('entradas')->select('id', 'mes')->get();
        return view('admin.Saida', compact('Saidas','franquias','produtos','entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('painel.produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaidaRequest $request)
    {
        $size = sizeof($request->quantidade);

        for ($i=0; $i < $size; $i++) {

            if($request->quantidade[$i]){

                $Saida = [
                    'comentario'=>$request->comentario[$i],
                    'mes'=>$request->mes,
                    'user_id'=>$request->user_id,
                    'quantidade'=>$request->quantidade[$i],
                    'produto_id'=>$request->produto_id[$i],
                    'franquia_id'=>$request->franquia_id,
                ];
                Saida::create($Saida);

            }

        }
        return redirect()->route('contagens.index')->with('message', 'Entrada registada com sucesso!');
        //var_dump($request->quantidade);
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
