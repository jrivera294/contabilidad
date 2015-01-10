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
            return $this->HasMany('Operacion');
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

}
