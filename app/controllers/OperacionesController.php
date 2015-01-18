<?php

class OperacionesController extends BaseController {

    public function operaciones()
	{
        $cuentas = Cuenta::lists('nombre','id');
//        $id = Cuenta::lists('id','id');
		return View::make('pages/operaciones/operaciones')->with('cuentas',$cuentas);
	}

    public function listaOperaciones(){
        $operaciones = Operacion::all();

        return View::make('pages/operaciones/listaOperaciones')->with('operaciones',$operaciones);
    }

    public function storeOperacion(){
        $operacion = new Operaciones;
        $data = Input::all();

        if ($operacion->isValid($data))
        {
            $operacion->fill($data);
            $operacion->save();
            return Redirect::route('operaciones')
                ->with('mensaje_error', 'Operaciones almacenadas correctamente')
                ->with('tipo_error', 'success');
        }
//        else
//        {
//            return Redirect::route('crearCuenta')
//                ->withInput()
//                ->withErrors($cuenta->errors)
//                ->with('error_flag',true);
//        }
		return View::make('pages/operaciones/operaciones');

    }

    public function deleteOperacion($id){
        $operacion = Operacion::find($id);
        $operacion->delete();

        return Redirect::to('listaOperaciones')
            ->with('mensaje_error', 'Operacion eliminada exitosamente')
            ->with('tipo_error', 'success');
    }

}
