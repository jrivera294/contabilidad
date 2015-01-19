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
               {{Form::open(array('url' => 'storeOperacion')) }}
               <div class="col-md-3">
                   {{ Form::button($action, array('type' => 'submit', 'class' => 'btn btn-primary btn-block')) }}
               </div>
               <div class="col-md-1"></div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-8">
<!--                             {{Form::open(array('url' => 'storeOperacion')) }}-->
                             <div class="row">
                                <div class="col-md-4 ">
                                    <label for="fecha" id="" class="">Fecha</label>
                                    {{ Form::input('date','fecha', null, array('placeholder' => '', 'class' => 'form-control')) }}
                                </div>
                                 <div class="col-md-8 ">
                                     <label for="descripcion" id="" class="">Descripcion</label>
                                    {{ Form::text('descripcion', null, array('placeholder' => 'Descripcion de la operacion', 'class' => 'form-control')) }}
                                </div>
                            </div><br>
                              <div class="row">
                                    <div class="controls" id="op">
                                    <div class="entry input-group" id="group">
                                        <div class="col-md-4 ">
                                            <label for="cuenta[]" id="" class="">Cuenta</label>
                                            {{Form::select('cuenta[]',$cuentas, null , array('class' => 'form-control')) }}

                                        </div>
                                         <div class="col-md-7 ">
                                             <label for="monto[]" id="" class="">Monto</label>
                                            {{ Form::text('monto[]', null, array('placeholder' => '0', 'class' => 'form-control')) }}
                                        </div>
                                        <br>
                                        <div class="col-md-1">
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
                         {{Form::close()}}
                    <br>
<!--                    </div>-->
                </div>
            </div>
@stop

@section('page_scripts')

        <script type="text/javascript" src="assets/js/operaciones.js">
        </script>

@stop
