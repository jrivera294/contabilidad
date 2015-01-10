@extends('layouts.master')

<?php

    if ($cuenta->exists):
        $form_data = array('route' => array('updateCuenta', $cuenta->id), 'method' => 'PATCH');
        $action    = 'Editar';
    else:
        $form_data = array('route' => 'storeCuenta', 'method' => 'POST');
        $action    = 'Crear';
    endif;

?>

@section ('title') Contable3000 - {{ $action }} cuenta @stop
@section('content')
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-8">
                    <h3>Cuentas</h3>

                </div>
                <div class="col-md-3">
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    {{ Form::model($cuenta, $form_data, array('role' => 'form')) }}
                      <div class="row">
                        <div class="form-group col-md-6">
                          {{ Form::label('nombre', 'Nombre') }}
                          {{ Form::text('nombre', null, array('placeholder' => '', 'class' => 'form-control')) }}
                        </div>
                        <div class="form-group col-md-6">
                         {{ Form::label('tipo', 'Tipo de cuenta') }}
                         {{ Form::select('tipo', array('0' => '','1' => 'Activo', '2' => 'Pasivo', '3' => 'Patrimonio','4' => 'Ingreso','5' => 'Egreso'), $cuenta->tipo, array('class' => 'form-control')) }}
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-12">
                          {{ Form::label('descripcion', 'Descripcion') }}
                          {{ Form::text('descripcion', null, array('placeholder' => '', 'class' => 'form-control')) }}
                        </div>
                      </div>
                      {{ Form::button($action . ' cuenta', array('type' => 'submit', 'class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
            </div>
@stop

@section('page_scripts')

@stop
