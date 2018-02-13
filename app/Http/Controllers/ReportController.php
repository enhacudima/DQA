<?php

namespace App\Http\Controllers;

use App\Contagemfisica;
use App\Franquia;
use App\Http\Requests\ProdutoRequest;
use App\Produto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        $franquias = Franquia::all();
        $users=User::all();
        $contagens=Contagemfisica::all();


        $recontagems = DB::table('recontagems_v')
            ->orderByRaw('id DESC')
            ->get();

        $contagens = DB::table('contagemfisicas_v_v_v')
            ->orderByRaw('id DESC')
            ->get();

        $salesforce=DB::table('salesforces_v')
            ->orderByRaw('id DESC')
            ->get();

        $bincard=DB::table('bincards_v')
            ->orderByRaw('id DESC')
            ->get();






        return view('admin.report',compact(['recontagems','franquias','users','produtos','contagens','salesforce','bincard'])  );
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

    public function store(ProdutoRequest $request)
    {

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
