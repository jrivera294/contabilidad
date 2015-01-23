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
                        $totalDebe += $cuenta->monto*(-1);
                    }
                }
            }

        }

		return View::make('pages/estadosFinancieros/libroDiario')
            ->with('totalDebe',$totalDebe)
            ->with('totalHaber',$totalHaber)
            ->with('operaciones',$operaciones);
	}

	public function libroMayor($cuenta_id)
	{
        $totalDebe = 0;
        $totalHaber = 0;

        $cuenta = Cuenta::find($cuenta_id);
        $operaciones = Operacion::getOperacionesByCuenta($cuenta_id);
        foreach($operaciones as $operacion){
            if($cuenta->tipo == 1 || $cuenta->tipo == 5){
                if($operacion->monto>0){
                    $totalDebe += $operacion->monto;
                }else{
                    $totalHaber += $operacion->monto*(-1);
                }
            }elseif($cuenta->tipo == 2 || $cuenta->tipo == 3 || $cuenta->tipo){
                if($operacion->monto>0){
                    $totalHaber += $operacion->monto;
                }else{
                    $totalDebe += $operacion->monto(-1);
                }
            }
        }


		return View::make('pages/estadosFinancieros/libroMayor')
            ->with('totalDebe',$totalDebe)
            ->with('totalHaber',$totalHaber)
            ->with('operaciones',$operaciones)
            ->with('cuenta',$cuenta);
	}

	public function balanceComprobacion()
	{
        $totalDebe = 0;
        $totalHaber = 0;

        $cuentas = Cuenta::getBalancesCuentas();
        foreach($cuentas as $cuenta){
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
                    $totalDebe += $cuenta->monto*(-1);
                }
            }
        }

		return View::make('pages/estadosFinancieros/balanceComprobacion')
            ->with('totalDebe',$totalDebe)
            ->with('totalHaber',$totalHaber)
            ->with('cuentas',$cuentas);
	}
}
