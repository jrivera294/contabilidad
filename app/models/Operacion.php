<?php


class Operacion extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'operaciones';

    protected $fillable = array('fecha','descripcion');
    protected $guarded = array('id');
    public $errors;

    public function Cuenta(){
            return $this->belongsToMany('Cuenta','operacionescuenta');
    }

    public function isValid($data)
    {
        $rules = array(
            'fecha' => 'required',
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

    public static function getCuentaByOperacion($operacion_id){
        $results = DB::select(
            DB::raw("SELECT cuenta.tipo, cuenta.nombre, operacionescuenta.monto
                FROM operacionescuenta
                    LEFT JOIN cuenta ON cuenta.id = operacionescuenta.cuenta_id
                WHERE operacionescuenta.operaciones_id = ".$operacion_id));
        return $results;
    }
}
