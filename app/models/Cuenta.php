<?php


class Cuenta extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cuenta';

    protected $fillable = array('nombre','tipo','descripcion');

}
