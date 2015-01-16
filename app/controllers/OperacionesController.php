<?php

class OperacionesController extends BaseController {

    public function operaciones()
	{
        $cuentas = Cuenta::lists('nombre','id');
//        $id = Cuenta::lists('id','id');
		return View::make('pages/operaciones/operaciones')->with('cuentas',$cuentas);
	}


}
