<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/produtos', 'ProdutoController');
    Route::resource('/franquias', 'FranquiaController');
    Route::resource('/bincard', 'BincardController');
    Route::resource('/salesforce', 'SalesforceController');
    Route::resource('/contagem', 'ContagemController');
    Route::resource('/users', 'UserController');
    Route::resource('/questionario', 'QuestionarioController');
    Route::resource('/recontagem', 'RecontagemController');
    Route::resource('/resumo-stock', 'ResumoStockController');
    Route::resource('/questionario-resumo', 'QuestionarioResumoController');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::resource('/users', 'UserController');
    Route::resource('/produtos', 'ProdutoController');
    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

    //Preencher a tabela gerar código
    Route::post('save-cabecalho', function (){
      /*  if(Request::ajax()){
            $data = DB::table('prov_cods')
                ->join('users', 'users.id', '=', 'prov_cods.user_id')
                ->select('prov_cods.*', 'users.name as user')
                ->orderByRaw('prov_cods.id DESC')
                ->get();

            return Response::json($data);
        }*/
        return Response::json('rota para o inferno');
    });
});

Route::get('/get/districts', function (){
    $province = DB::table('provice_of_mozambique')
        ->select(DB::raw('id'))
        ->where('province', $_GET['province'])
        ->get();

    if(Request::ajax()){
        $data = DB::table('districts_of_mozambique')
            ->where('provice_of_mozambique_id', $province[0]->id)->get();

        return Response::json($data);
    }
});