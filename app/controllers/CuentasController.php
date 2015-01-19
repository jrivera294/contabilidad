<?php

class CuentasController extends BaseController {

	public function index()
	{
		return View::make('pages/ejemplo');
	}

	public function cuentas()
	{
        $cuentas = Cuenta::all();
		return View::make('pages/cuenta/cuentas')->with('cuentas',$cuentas);
	}

	public function editCuenta($id)
	{
        $cuenta = Cuenta::find($id);
        if (is_null ($cuenta))
        {
            App::abort(404);
        }

		return View::make('pages/cuenta/formCuenta')->with('cuenta',$cuenta);
	}

	public function crearCuenta()
	{
        $cuenta = new Cuenta;
		return View::make('pages/cuenta/formCuenta')->with('cuenta',$cuenta);
	}

    public function storeCuenta()
	{
        $cuenta = new Cuenta;
        $data = Input::all();

        if ($cuenta->isValid($data))
        {
            $cuenta->fill($data);
            $cuenta->save();
            return Redirect::route('cuentas')
                ->with('mensaje_error', 'Cuenta almacenadas correctamente')
                ->with('tipo_error', 'success');
        }
        else
        {
            return Redirect::route('crearCuenta')
                ->withInput()
                ->withErrors($cuenta->errors)
                ->with('error_flag',true);
        }
	}

    public function updateCuenta($id)
	{
        // Creamos un nuevo objeto para nuestro nuevo usuario
        $cuenta = Cuenta::find($id);

        // Si el usuario no existe entonces lanzamos un error 404 :(
        if (is_null ($cuenta))
        {
            App::abort(404);
        }
        // Obtenemos la data enviada por el usuario
        $data = Input::all();

        // Revisamos si la data es válido
        if ($cuenta->isValid($data))
        {
            // Si la data es valida se la asignamos al usuario
            $cuenta->fill($data);
            // Guardamos el usuario
            $cuenta->save();
            // Y Devolvemos una redirección a la acción show para mostrar el usuario
            return Redirect::route('cuentas')
                ->with('mensaje_error', 'Cuenta editada correctamente')
                ->with('tipo_error', 'success');
        }
        else
        {
            // En caso de error regresa a la acción edit con los datos y los errores encontrados
            return Redirect::route('editCuenta', $cuenta->id)
                ->withInput()
                ->withErrors($cuenta->errors)
                ->with('error_flag',true);
        }
	}

    public function deleteCuenta($id)
	{
        $cuenta = Cuenta::find($id);
        if (is_null ($cuenta))
        {
            App::abort(404);
        }

        $cuenta->delete();

        return Redirect::route('cuentas')
            ->with('mensaje_error', 'Cuenta eliminada correctamente')
            ->with('tipo_error', 'success');
	}
}
