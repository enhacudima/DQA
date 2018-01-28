<?php

namespace App\Http\Controllers;

use App\User;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart = Charts::create('bar', 'highcharts')
            ->title('Produtos mais vendidos') // Título do gráfico
            ->labels(['Smartphone', 'Notebook', 'TV']) // Propriedades que vão ser adicionadas
            ->values([100, 20, 30]) // Valores das propriedades
            ->dimensions(500, 300) // Dimensão = 500 largura x 300 altura
            ->responsive(false) // É utilizado para se adaptar ao tamanho do box que se encontra
            ->elementLabel("Total de vendas"); // Legenda para o gráfico

        $user = Charts::database(User::all(), 'pie', 'highcharts')
            ->title("Séries assistidas pelos usuários")
            ->elementLabel("Total")
            ->dimensions(500, 300)
            ->responsive(false)
            ->groupBy('grupo'); // Usuários vão ser agrupados pelo campo série




        $controle = DB::table('produtos')
            ->orderByRaw('nome DESC')
            ->get();

        return view('home',['chart' => $chart],['user' => $user], compact('controle'));
    }

    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }


    public function changePassword(Request $request){


        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Sua senha atual não corresponde à senha fornecida. Por favor, tente novamente.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Nova senha não pode ser igual à sua senha atual. Escolha uma senha diferente.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Senha alterada com sucesso !");

    }

}
