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
Route::get('/cuentas/{id}', array('uses'=>'CuentasController@editCuenta','as' => 'editCuenta'));
Route::get('/cuentas/{id}/delete', array('uses'=>'CuentasController@deleteCuenta','as' => 'deleteCuenta'));
Route::get('/crearCuenta', array('uses'=>'CuentasController@crearCuenta','as' => 'crearCuenta'));
Route::post('/storeCuenta', array('uses'=>'CuentasController@storeCuenta','as' => 'storeCuenta'));
Route::patch('/updateCuenta/{id}', array('uses'=>'CuentasController@updateCuenta','as' => 'updateCuenta'));



Route::get('/operaciones', array('uses'=>'OperacionesController@operaciones','as' => 'operaciones'));



Route::get('/libroDiario', array('uses'=>'estadosController@libroDiario','as' => 'libroDiario'));
Route::get('/libroMayor/{id}', array('uses'=>'estadosController@libroMayor','as' => 'libroMayor'));
Route::get('/balanceComprobacion', array('uses'=>'estadosController@balanceComprobacion','as' => 'balanceComprobacion'));
