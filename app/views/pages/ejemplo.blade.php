@extends('layouts.master')
@section ('title') Contable3000 - Bienvenido @stop
@section('content')
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h3>Bienvenido</h3>
                    <hr>
                <div class="row">
                    <div class="jumbotron col-md-6" style="border-radius: 25px; padding: 3em;">
                        <h4>¿Cómo crear una cuenta?</h4>
                        <h5 style="padding: 3em;">1)Dirígase a Cuentas, en la parte superior de la página.
                        </h5>
                        <h5 style="padding: 3em;">2)Haga click en "Crear Cuenta". </h5>
                        <h5 style="padding: 3em;">3)Rellene los datos del formulario. </h5>

                    </div>
                    <div class="col-md-6" style="border-radius: 25px;">
                        <img src="images/Inicio.PNG">
                         <img src="images/inicio1.PNG">
                         <img src="images/inicio2.PNG">

                    </div>
                 </div>
                <div class="row">
                     <div class="jumbotron col-md-6" style="border-radius: 25px; padding: 3em;">
                        <h4>¿Cómo crear una operacion?</h4>
                        <h5 style="padding: 3em;">1)Dirígase a Operaciones, en la parte superior de la página.
                        </h5>
                        <h5 style="padding: 3em;">2)Haga click en "Crear Operacion". </h5>
                        <h5 style="padding: 3em;">3)Rellene los datos del formulario.</h5>

                        <h5>Para agregar mas movimientos en una cuenta, haga click en "+"</h5>
                        <h5>Para quitar movimientos en una cuenta, haga click en "-"</h5>
                        <h5>Solo si es un egreso de la cuenta, coloque un "-" en el monto.</h5>
                    </div>
                    <div class="col-md-6" style="border-radius: 25px;">
                        <img src="images/inicio3.PNG"><br><br><br><br>
                        <img src="images/inicio4.PNG"><br><br><br><br><br><br>
                        <img src="images/inicio5.PNG">
                    </div>
             </div>
                <div class="col-md-1"></div>
            </div>

@stop

@section('page_scripts')

@stop
