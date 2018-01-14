<?php

namespace App\Http\Controllers;

use App\Entrada;
use App\Http\Requests\EntradaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\Timestamp;

class EntradaController extends Controller
{
    private $entrada;
    public function __construct(Entrada $entrada)
    {
        $this->entrada=$entrada;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = $this->entrada->all();
        $franquias = DB::table('franquias')->select('id', 'nome')->get();
        $produtos = DB::table('produtos')->select('id', 'nome', 'codigo')->get();
        return view('admin.entrada', compact('entradas','franquias','produtos'));
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
    public function store(EntradaRequest $request)
    {
        $size = sizeof($request->quantidade);

        for ($i=0; $i < $size; $i++) {

            if($request->quantidade[$i]){

            $entradas = [
                'comentario'=>$request->comentario[$i],
                'mes'=>$request->mes,
                'user_id'=>$request->user_id,
                'quantidade'=>$request->quantidade[$i],
                'produto_id'=>$request->produto_id[$i],
                'franquia_id'=>$request->franquia_id,
            ];
            Entrada::create($entradas);

           }

       }
        return redirect()->route('entradas.index')->with('message', 'Entrada registada com sucesso!');
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
