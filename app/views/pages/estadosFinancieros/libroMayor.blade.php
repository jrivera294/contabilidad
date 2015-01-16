@extends('layouts.master')
@section ('title') Contable3000 - Libro diario @stop
@section('content')
   <?php $saldo = 0;?>
    <!-- Page Content -->
           <div class="row">
                <div class="col-md-8">
                    <h3>Libro mayor - Cuenta: {{$cuenta->nombre}}</h3>
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
                            <th>Descripcion</th>
                            <th>Debe</th>
                            <th>Haber</th>
                            <th>Saldo</th>
                        </tr>
                        @if(!is_null($operaciones))
                        @foreach ($operaciones as $operacion)
                        <?php $saldo += $operacion->monto;?>
                        <tr>
                        <td>{{$operacion->fecha}}</td>
                        <td>{{$operacion->descripcion}}</td>
                            @if($cuenta->tipo == 1 || $cuenta->tipo == 5)
                                @if($operacion->monto>0)
                            <td>{{$operacion->monto}}</td>
                            <td></td>
                                @else
                            <td></td>
                            <td>{{$operacion->monto}}</td>
                                @endif
                            @elseif($cuenta->tipo == 2 || $cuenta->tipo == 3 || $cuenta->tipo == 4)
                                @if($operacion->monto>0)
                            <td></td>
                            <td>{{$operacion->monto}}</td>
                                @else
                            <td>{{$operacion->monto}}</td>
                            <td></td>
                                @endif
                            @endif
                            <td>
                                @if($saldo>=0)
                                    {{">".$saldo}}
                                @else
                                    {{"<".$saldo}}
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        <tr class="success">
                            <td></td>
                            <td>Total:</td>
                            <td>{{$totalDebe}}</td>
                            <td>{{$totalHaber}}</td>
                            <td>{{$saldo}}</td>
                        </tr>
                    </table>
                </div>
            </div>
@stop

@section('page_scripts')

@stop
