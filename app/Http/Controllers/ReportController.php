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

        $recontagems = DB::table('recontagems')
            ->join('franquias', 'recontagems.franquia_id', '=', 'franquias.id')
            ->join('users', 'recontagems.user_id', '=', 'users.id')
            ->join('atividades', 'recontagems.codigo', '=', 'atividades.codigo')
            ->select(
                'recontagems.*',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'atividades.atividade',
                'atividades.tipo_atividade',
                'atividades.faixa_etaria',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->get();

        /*
        $contagens = DB::table('contagemfisicas_v_v_v')
            ->orderByRaw('id DESC')
            ->get();
        */

        $contagens = DB::table('contagemfisicas')
            //->selectRaw(DB::raw('UM(contagemfisicas.entradas')
            ->join('franquias', 'contagemfisicas.franquia_id', '=', 'franquias.id')
            ->rightJoin('users', 'contagemfisicas.user_id', '=', 'users.id')
            ->rightJoin('produtos', 'contagemfisicas.produtos_id', '=', 'produtos.id')
            ->select(
                DB::raw(
                    'SUM(contagemfisicas.contagem_fisica) as somma, 
                    contagemfisicas.*,
                    produtos.nome as produto, 
                    produtos.codigo, 
                    produtos.unidade, 
                    franquias.province,
                    franquias.franquia_id,
                    franquias.districts,
                    franquias.bairro,
                    franquias.tipo,
                    franquias.modelo,
                    franquias.enfermeira,
                    franquias.telefone,
                    franquias.lat,
                    franquias.log,
                    franquias.nome as franquia,
                    users.name as user'
                )
            )
            ->groupBy('contagemfisicas.produtos_id')
            ->groupBy('contagemfisicas.franquia_id')
            ->groupBy('contagemfisicas.user_id')
            ->groupBy('contagemfisicas.data_dqa')
            ->groupBy('contagemfisicas.data_inicio')
            ->groupBy('contagemfisicas.data_fim')
            ->groupBy('contagemfisicas.id')
            ->groupBy('contagemfisicas.bincards_id')
            ->get();
dd($contagens);

        /*
        $contagens = DB::table('contagemfisicas')
            ->join('franquias', 'contagemfisicas.franquia_id', '=', 'franquias.id')
            ->join('users', 'contagemfisicas.user_id', '=', 'users.id')
            ->join('produtos', 'contagemfisicas.produtos_id', '=', 'produtos.id')
            ->select(
                'contagemfisicas.*',
                'produtos.nome as produto',
                'produtos.codigo',
                'produtos.unidade',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->get();
*/
        $salesforce = DB::table('salesforces')
            ->join('franquias', 'salesforces.franquia_id', '=', 'franquias.id')
            ->join('users', 'salesforces.user_id', '=', 'users.id')
            ->join('produtos', 'salesforces.produtos_id', '=', 'produtos.id')
            ->select(
                'salesforces.*',
                'produtos.nome as produto',
                'produtos.codigo',
                'produtos.unidade',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->get();

        $bincard = DB::table('bincards')
            ->join('franquias', 'bincards.franquia_id', '=', 'franquias.id')
            ->join('users', 'bincards.user_id', '=', 'users.id')
            ->join('produtos', 'bincards.produtos_id', '=', 'produtos.id')
            ->select(
                'bincards.*',
                'produtos.nome as produto',
                'produtos.codigo',
                'produtos.unidade',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->get();

        $questionario_stock = DB::table('questionario')
            ->join('franquias', 'questionario.franquia_id', '=', 'franquias.id')
            ->join('users', 'questionario.user_id', '=', 'users.id')
            ->join('questionario_dics', 'questionario.questao', '=', 'questionario_dics.codigo')
            ->select(
                'questionario.*',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'questionario_dics.questao',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->where('questionario.categoria', 'stock_parte_1')
            ->orwhere('questionario.categoria', 'stock_parte_2')
            ->get();


        $questionario_recontagem = DB::table('questionario')
            ->join('franquias', 'questionario.franquia_id', '=', 'franquias.id')
            ->join('users', 'questionario.user_id', '=', 'users.id')
            ->join('questionario_dics', 'questionario.questao', '=', 'questionario_dics.codigo')
            ->select(
                'questionario.*',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'questionario_dics.questao',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->where('questionario.categoria', 'recontagem')
            ->get();

        $questionario_verificacao = DB::table('questionario')
            ->join('franquias', 'questionario.franquia_id', '=', 'franquias.id')
            ->join('users', 'questionario.user_id', '=', 'users.id')
            ->join('questionario_dics', 'questionario.questao', '=', 'questionario_dics.codigo')
            ->select(
                'questionario.*',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'questionario_dics.questao',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->where('questionario.categoria', 'verificacao')
            ->get();

        $senhas = DB::table('senhas')
            ->join('franquias', 'senhas.franquia_id', '=', 'franquias.id')
            ->join('users', 'senhas.user_id', '=', 'users.id')
            ->select(
                'senhas.*',
                'franquias.province',
                'franquias.franquia_id',
                'franquias.districts',
                'franquias.bairro',
                'franquias.tipo',
                'franquias.modelo',
                'franquias.enfermeira',
                'franquias.telefone',
                'franquias.lat',
                'franquias.log',
                'franquias.nome as franquia',
                'users.name as user'
            )
            ->get();

        return view('admin.report',compact(['recontagems','franquias','users','produtos','contagens','salesforce','bincard', 'questionario_stock', 'questionario_recontagem', 'questionario_verificacao', 'senhas'])  );
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
