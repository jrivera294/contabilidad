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
                        </tr>
                        @if(!is_null($operaciones))
                        <?php $i=1;?>
                        @foreach ($operaciones as $operacion)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$operacion->fecha}}</td>
                            <td><p>{{$operacion->descripcion}}</p></td>
                        </tr>
                        <?php $i++;?>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
@stop

@section('page_scripts')

@stop
