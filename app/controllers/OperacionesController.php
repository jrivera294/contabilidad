<?php

class OperacionesController extends BaseController {

    public function operaciones()
	{
        $cuentas = Cuenta::all();
		return View::make('pages/operaciones/operaciones')->with('cuentas',$cuentas);
	}


}
