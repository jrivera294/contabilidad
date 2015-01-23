@extends('layouts.master')
@section ('title') Contable3000 - Libro diario @stop
@section('content')
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-8">
                    <h3>Libro diario</h3>

                </div>
                <div class="col-md-3">
                   <br>

                </div>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr class="active">
                            <th>Fecha</th>
                            <th>Cuenta</th>
                            <th>Debe</th>
                            <th>Haber</th>
                        </tr>
                        @if(!is_null($operaciones))
                        <?php $i=1;?>
                        @foreach ($operaciones as $operacion)
                        <tr>
                            <td>{{$operacion->fecha}}</td>
                            <td> - {{$i}} - </td>
                            <td></td>
                            <td></td>
                        </tr>

                            @foreach ($operacion->cuentas as $cuenta)
                               <tr>
                                <td></td>
                                <td>{{$cuenta->nombre}}</td>
                                @if($cuenta->tipo == 1 || $cuenta->tipo == 5)
                                    @if($cuenta->monto>0)
                                <td>{{$cuenta->monto}}</td>
                                <td></td>
                                    @else
                                <td></td>
                                <td>{{$cuenta->monto}}</td>
                                    @endif
                                @elseif($cuenta->tipo == 2 || $cuenta->tipo == 3 || $cuenta->tipo == 4)
                                    @if($cuenta->monto>0)
                                <td></td>
                                <td>{{$cuenta->monto}}</td>
                                    @else
                                <td>{{$cuenta->monto}}</td>
                                <td></td>
                                    @endif
                                @endif
                                </tr>
                            @endforeach
                                <tr>
                                    <td>Descripción:</td>
                                    <td>{{$operacion->descripcion}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php $i++;?>
                        @endforeach
                        @endif
                        <tr class="success">
                            <td></td>
                            <td>Total:</td>
                            <td>{{$totalDebe}}</td>
                            <td>{{$totalHaber}}</td>
                        </tr>
                    </table>
                </div>
            </div>
@stop

@section('page_scripts')

@stop
