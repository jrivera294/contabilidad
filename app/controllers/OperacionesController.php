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
        $operacion = new Operacion;
        $data = Input::all();

return $data;
        if ($operacion->isValid($data))
        {
            $operacion->fill($data);
            $operacion->save();


            foreach($data['cuenta'] as $key => $cuenta){
                $operacion->Cuenta()->attach(array('cuenta_id'=>$cuenta),array('monto'=>$data['monto'][$key]));
            }

            return Redirect::route('listaOperaciones')
                ->with('mensaje_error', 'Operaciones almacenadas correctamente')
                ->with('tipo_error', 'success');
        }
        else
        {
            return Redirect::route('operaciones')
                ->withErrors($operacion->errors)
                ->with('error_flag',true);
        }
    }

    public function deleteOperacion($id){
        $operacion = Operacion::find($id);
        $operacion->delete();

        return Redirect::to('listaOperaciones')
            ->with('mensaje_error', 'Operacion eliminada exitosamente')
            ->with('tipo_error', 'success');
    }

}
