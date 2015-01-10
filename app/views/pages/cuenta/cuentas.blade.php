@extends('layouts.master')
@section ('title') Contable3000 - Cuentas @stop
@section('content')
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-8">
                    <h3>Cuentas</h3>

                </div>
                <div class="col-md-3">
                   <br>
                    <a class="btn btn-primary btn-block" href="#" role="button">Crear cuenta</a>
                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Descripcion</th>
                            <th>Opciones</th>
                        </tr>
                        @if(!is_null($cuentas))
                        @foreach ($cuentas as $cuenta)
                        <tr>
                            <td>{{$cuenta->nombre}}</td>
                            <td>{{$cuenta->tipo}}</td>
                            <td><p>{{$cuenta->descripcion}}</p></td>
                            <td>
                                <a class="btn btn-default" href="#" role="button">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a class="btn btn-default" href="#" role="button">
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
