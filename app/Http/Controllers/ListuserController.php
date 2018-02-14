<?php

namespace App\Http\Controllers;

use App\User;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;

class ListuserController extends Controller
{
    public function index()
    {
        $chart = Charts::database(User::all(), 'bar', 'highcharts')
            ->title("Usuarios por grupo")
            ->elementLabel("Total")
            ->dimensions(200, 150)
            ->responsive(true)
            ->groupBy('grupo');

        $user = Charts::database(User::all(), 'pie', 'highcharts')
            ->title("Usuarios por grupo")
            ->elementLabel("Total")
            ->dimensions(200, 150)
            ->responsive(true)
            ->groupBy('grupo'); // Usuários vão ser agrupados pelo campo série



        $users = DB::table('users')
            ->orderByRaw('id DESC')
            ->get();




        return view('admin.listuser',compact(['users','chart','user']));
    }
}
