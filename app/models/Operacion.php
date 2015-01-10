<?php


class Operacion extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'operaciones';

    protected $fillable = array('fecha','descripcion','monto');

}
