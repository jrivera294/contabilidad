<?php

class CierresController extends BaseController {

    public function libroDiario()
	{
        $totalDebe = 0;
        $totalHaber = 0;



		return View::make('pages/estadosFinancieros/libroDiario')
            ->with('totalDebe',$totalDebe)
            ->with('totalHaber',$totalHaber);
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
