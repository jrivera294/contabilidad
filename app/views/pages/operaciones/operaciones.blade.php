@extends('layouts.master')
@section ('title') Contable3000 - Cuentas @stop
@section('content')
    <!-- Page Content -->

           <div class="row">
                <div class="col-md-8">
                    <h3>Operaciones</h3>

                </div>
<!--
                <div class="col-md-3">
                   <br>
                    <a class="btn btn-primary btn-block" href="{{ URL::to('/crearOperacion') }}" role="button">Crear cuenta</a>
                </div>
-->
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                <div class="control-group" id="fields">
                <label class="control-label" for="field1">Operacion</label>
                <div class="controls">
                    <form class="form-inline" role="form" autocomplete="off">

                        <div class="entry input-group col-xs-5">
                             <input class="form-control" name="fecha" type="date" />
                            <label for="sel1">Select list:</label>
                              <select class="form-control" id="sel1">
                                  {{Form::model($cuentas, array('route' => array('cuentas.update', $cuentas->id))) }}
                                    <option >1</option>
                                  {{Form::close}}
                              </select>
                            <input class="form-control" name="fields[]" type="text" placeholder="Descripcion" />
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
            </div>
<!--
    <script scr="../assets/js/operaciones.js">
    </script>
-->
@stop

@section('page_scripts')

        <script type="text/javascript" src="assets/js/operaciones.js">
        </script>

@stop
