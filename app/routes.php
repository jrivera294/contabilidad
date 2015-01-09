<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/inicio', array('uses'=>'CuentasController@index','as' => 'inicio'));
Route::get('/cuentas', array('uses'=>'CuentasController@cuentas','as' => 'cuentas'));
Route::get('/operaciones', array('uses'=>'CuentasController@operaciones','as' => 'operaciones'));
Route::get('/libroDiario', array('uses'=>'CuentasController@libroDiario','as' => 'libroDiario'));
Route::get('/libroMayor', array('uses'=>'CuentasController@libroMayor','as' => 'libroMayor'));
Route::get('/balanceComprobacion', array('uses'=>'CuentasController@balanceComprobacion','as' => 'balanceComprobacion'));
Route::get('/totalizar', array('uses'=>'CuentasController@totalizar','as' => 'totalizar'));

//Route::post('/loginPost', array('uses'=>'AuthController@loginPost','as' => 'loginPost'));
