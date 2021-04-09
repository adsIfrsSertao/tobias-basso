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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'EntrarController@index')->name('entrar');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create')->name('registrar');
Route::post('/registrar', 'RegistroController@store');

Route::get('/produtos', 'ProdutoController@index')->name('produtos');
Route::get('/valores', 'ValorController@index')->name('valores');
Route::get('/contas', 'ContaController@index')->name('contas');

Route::get('/novaConta', 'AdicionarContaController@index')->name('novaConta');


