<?php

namespace App\Http\Controllers;

use App\Franquia;
use App\Http\Requests\FranquiaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FranquiaController extends Controller
{
    private $franquia;
    public function __construct(Franquia $franquia)
    {
        $this->franquia=$franquia;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $franquias = $this->franquia->all();
       // return view('admin.franquia', compact('franquias'));
        $province = DB::table('provice_of_mozambique')
            ->orderByRaw('province DESC')
            ->get();
        return view('admin.franquia', compact('province'));
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
    public function store(FranquiaRequest $request)
    {
        Franquia::create($request->all());
        return redirect()->route('franquias.index')->with('message', 'Franquia registada com sucesso!');
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
