@extends('layouts.master')

<?php

        $form_data = array('route' => 'storeOperacion', 'method' => 'POST');
        $action    = 'Crear';

?>

@section ('title') Contable3000 - {{ $action }} @stop
@section('content')
    <!-- Page Content -->

           <div class="row">
                <div class="col-md-8">
                    <h3>Operaciones</h3>

                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
<!--                          {{ Form::model($operacion, $form_data, array('role' => 'form')) }}-->
                             {{Form::open(array('url' => 'storeOperacion')) }}
                             <div class="row">
                                <div class="col-md-4 ">
                                    {{ Form::input('date','fecha', null, array('placeholder' => '', 'class' => 'form-control')) }}
                                </div>
                                 <div class="col-md-8 ">
                                    {{ Form::text('descrip', null, array('placeholder' => 'Descripcion de la operacion', 'class' => 'form-control')) }}
                                </div>
                            </div>
                              <div class="row">
                                    <div class="controls" id="op">
                                    <div class="entry input-group" id="group">
                                        <div class="col-md-4 ">
                                            {{Form::select('cuenta[]',$cuentas, null , array('class' => 'form-control')) }}
                                        </div>
                                         <div class="col-md-8 ">
                                            {{ Form::text('monto[]', null, array('placeholder' => '0', 'class' => 'form-control')) }}
                                        <span class="input-group-btn">
                                        <button class="btn btn-success btn-add" type="button">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                     </span>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            </div>
                         {{ Form::button($action . 'Crear', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
                         {{Form::close()}}
                    <br>
                    </div>
</div>
@stop

@section('page_scripts')

        <script type="text/javascript" src="assets/js/operaciones.js">
        </script>

@stop
