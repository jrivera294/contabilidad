<?php


class Cuenta extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cuenta';

    protected $fillable = array('nombre','tipo','descripcion');
    protected $guarded = array('id');
    public $errors;

    public function Operacion(){
            return $this->belongsToMany('Operacion','operacionescuenta')->withTimestamps();
    }

    public function isValid($data)
    {
        $rules = array(
            'nombre' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required'
        );

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            return true;
        }else{
            $this->errors = $validator->errors();
            return false;
        }
    }

    public static function getBalancesCuentas(){
        $results = DB::select(
            DB::raw("SELECT cuenta.* , SUM(operacionescuenta.monto) AS monto
                FROM cuenta
                    LEFT JOIN operacionescuenta ON operacionescuenta.cuenta_id = cuenta.id
                GROUP BY cuenta.id"));
        return $results;
    }

}
