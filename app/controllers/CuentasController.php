<?php

class CuentasController extends BaseController {

	public function index()
	{
		return View::make('pages/ejemplo');
	}

	public function cuentas()
	{
        $cuentas = Cuenta::all();
		return View::make('pages/cuenta/cuentas')->with('cuentas',$cuentas);
	}

	public function editCuenta($id)
	{
        $cuentas = Cuenta::find($id);
		return View::make('pages/ejemplo');
	}

	public function crearCuenta()
	{

		return View::make('pages/ejemplo');
	}




}
