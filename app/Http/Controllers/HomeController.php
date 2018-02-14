<?php



namespace App\Http\Controllers;

use App\Franquia;
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

      $clinica = Charts::database(Franquia::all(), 'bar', 'highcharts')
            ->title("Franquias por Provincias")
            ->elementLabel("Total")
            ->dimensions(200, 100)
            ->responsive(true)
            ->groupBy('province');


        $chart = Charts::database(User::all(), 'bar', 'highcharts')
            ->title("Usuarios por grupo")
            ->elementLabel("Total")
            ->dimensions(200, 150)
            ->responsive(true)
            ->groupBy('grupo');






        return view('home',compact(['chart','clinica']));
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
