<?php

class EstadosController extends BaseController {

    public function libroDiario()
	{
        $totalDebe = 0;
        $totalHaber = 0;

        $operaciones = Operacion::all();
        foreach($operaciones as $operacion){
            $operacion->cuentas = Operacion::getCuentaByOperacion($operacion->id);
            foreach($operacion->cuentas as $cuenta){
                if($cuenta->tipo == 1 || $cuenta->tipo == 5){
                    if($cuenta->monto>0){
                        $totalDebe += $cuenta->monto;
                    }else{
                        $totalHaber += $cuenta->monto*(-1);
                    }
                }elseif($cuenta->tipo == 2 || $cuenta->tipo == 3 || $cuenta->tipo){
                    if($cuenta->monto>0){
                        $totalHaber += $cuenta->monto;
                    }else{
                        $totalDebe += $cuenta->monto(-1);
                    }
                }
            }

        }

		return View::make('pages/estadosFinancieros/libroDiario')
            ->with('totalDebe',$totalDebe)
            ->with('totalHaber',$totalHaber)
            ->with('operaciones',$operaciones);
	}

	public function libroMayor()
	{
		return View::make('pages/ejemplo');
	}

	public function balanceComprobacion()
	{
		return View::make('pages/ejemplo');
	}

	public function totalizar()
	{
		return View::make('pages/ejemplo');
	}

}
