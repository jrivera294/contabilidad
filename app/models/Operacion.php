<?php


class Operacion extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'operaciones';

    protected $fillable = array('fecha','descripcion','monto');
    protected $guarded = array('id');
    public $errors;

    public function Cuenta(){
            return $this->BelongsTo('Cuenta');
    }

    public function isValid($data)
    {
        $rules = array(
            'fecha' => 'required',
            'monto' => 'required',
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
}
