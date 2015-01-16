@extends('layouts.master')
@section ('title') Contable3000 - Cuentas @stop
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
                <div class="control-group" id="fields">
                    <div class="col-md-8">
                        <label class="control-label" for="field1">Operacion</label>
                             {{Form::open(array('url' => 'crearOperacion')) }}
                             <div class="row">
                                <div class="col-md-4 ">
                                    {{ Form::input('date','fecha', null, array('placeholder' => '', 'class' => 'form-control')) }}
                                </div>
                                 <div class="col-md-8 ">
                                    {{ Form::text('descrip', null, array('placeholder' => 'Descripcion de la operacion', 'class' => 'form-control')) }}
                                </div>
                            </div>
<!--
                              <div class="row">
                                <div class="controls ">
                                    <div class="entry input-group col-md-12">
                                        <div class="col-md-4 ">
                                            {{Form::select('cuenta[]',$cuentas, null , array('class' => 'form-control')) }}
                                        </div>
                                         <div class="col-md-8 ">
                                            {{ Form::text('monto[]', null, array('placeholder' => '0', 'class' => 'form-control')) }}
                                        </div>
                                  </div>
                                 <span class="input-group-btn">
                                    <button class="btn btn-success btn-add" type="button">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                 </span>
                                 </div>
                            </div>
-->
                            <div class="row">
                                  <div class="controls">
                <form role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </form>
            <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
            </div>


                            </div>
                            </div>
    <!--                    boton de submit por laravel-->
                         {{Form::close()}}
                    <br>
                    </div>
                  </div>
                </div>
@stop

@section('page_scripts')

        <script type="text/javascript" src="assets/js/operaciones.js">
        </script>

@stop
