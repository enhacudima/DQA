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
});