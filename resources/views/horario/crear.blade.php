@extends('adminlte::page')

@section('title', 'Crear Horario')

@section('content_header')
    <div class="container">
        <h1 class="mt-3">Crear Horario</h1>
    </div>
@stop

@section('plugins.Datatables', true)

@section('content')

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <p><a href="{{route('horario.create', 1)}}">Regresar</a></p>
            @if (session('info'))
                <div class="alert alert-success">
                    <strong>{{session('info')}}</strong>
                </div>
            @endif
            <section class="content">
                @include('horario._form')
            </section>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="tbl_anio" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width: 120px;"> Horario </th>
                            @foreach ($dia_semanas as $value)
                            <th>{{ $value->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $hr_inicio = strtotime ( env('HORA_INICIO_CLASES') ) ;
                            $hr_fin = strtotime ( env('HORA_ACADEMICA'), $hr_inicio ) ;
                            $hr_inicio = date ( 'H:i' , $hr_inicio);
                            $hr_fin = date ( 'H:i' , $hr_fin);
                        @endphp

                        @for ($i=0; $i < env('NRO_HORA_ACADEMICA')+1; $i++)
                        <tr>@php
                            if ($hr_inicio!=env('HORA_REFRIGERIO')) {
                                echo '<td>'.$hr_inicio.' - '.$hr_fin.'</td>';
                                $hr_inicio = strtotime ( env('HORA_ACADEMICA'), strtotime ($hr_inicio) ) ;
                                $hr_inicio = date('H:i',$hr_inicio);
                                if ($hr_inicio!=env('HORA_REFRIGERIO')) {
                                    $hr_fin = strtotime ( env('HORA_ACADEMICA'), strtotime ($hr_fin) ) ;
                                    $hr_fin = date ( 'H:i' , $hr_fin);
                                }else {
                                    $hr_fin = strtotime ( env('TIEMPO_REFRIGERIO'), strtotime ($hr_fin) ) ;
                                    $hr_fin = date ( 'H:i' , $hr_fin);
                                }
                            }else {
                                echo '<td>'.$hr_inicio.' - '.$hr_fin.'</td>';
                                $hr_inicio = strtotime ( env('TIEMPO_REFRIGERIO'), strtotime ($hr_inicio) ) ;
                                $hr_fin = strtotime ( env('HORA_ACADEMICA'), strtotime ($hr_fin) ) ;
                                $hr_inicio = date('H:i',$hr_inicio);
                                $hr_fin = date('H:i',$hr_fin);
                            }
                            @endphp
                            @foreach ($dia_semanas as $value)
                                @foreach ($horarios as $item)
                                    {{-- @if ($item->dia_semanas_id==$value->id)
                                    <td>{{ $horarios }}</td>
                                    @endif --}}
                            <td>{{ $horarios }}</td>
                                @endforeach
                            @endforeach
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection
