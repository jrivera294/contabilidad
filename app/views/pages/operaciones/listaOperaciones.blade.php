@extends('layouts.master')
@section ('title') Contable3000 - Operaciones @stop
@section('content')
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-8">
                    <h3>Operaciones</h3>

                </div>
                <div class="col-md-3">
                   <br>
                    <a class="btn btn-primary btn-block" href="{{ URL::to('/operaciones') }}" role="button">Crear operacion</a>
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th>Codigo</th>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Opciones</th>
                        </tr>
                        @if(!is_null($operaciones))
                        @foreach ($operaciones as $operacion)
                        <tr>
                            <td>{{$operacion->id}}</td>

                            <td>{{$operacion->fecha}}</td>
                            <td><p>{{$operacion->descripcion}}</p></td>
                            <td>
                                <a class="btn btn-default" href="{{ URL::action('OperacionesController@deleteOperacion', [$operacion->id]) }}" role="button">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
@stop

@section('page_scripts')

@stop
