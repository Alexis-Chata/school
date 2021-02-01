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
            <p><a href="{{route('horario.create')}}">Regresar</a></p>
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
                            <th></th>
                            @foreach ($dia_semanas as $value)
                            <th>{{ $value->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            //print_r($anio);
                        @endphp

                        @foreach ($grupo_academicos as $value)
                        <tr>@php
                            $hr_inicio = strtotime ( env('HORA_INICIO_CLASES') ) ;
                            $hr_inicio = strtotime ( env('HORA_ACADEMICA'), $hr_inicio ) ;
                            $hr_inicio = date ( 'H:i' , $hr_inicio);
                            for ($i=0; $i < env('NRO_HORA_ACADEMICA')+1; $i++){
                                if ($hr_inicio!=env('HORA_REFRIGERIO')) {
                                    echo '<option value="'.$hr_inicio.'"> '.$hr_inicio.' </option>';
                                    $hr_inicio = strtotime ( env('HORA_ACADEMICA'), strtotime ($hr_inicio) ) ;
                                    $hr_inicio = date('H:i',$hr_inicio);
                                }else {
                                    //echo '<option value="'.$hr_inicio.'"> '.$hr_inicio.' </option>';
                                    $hr_inicio = strtotime ( env('TIEMPO_REFRIGERIO'), strtotime ($hr_inicio) ) ;
                                    $hr_inicio = date('H:i',$hr_inicio);
                                }

                            }@endphp
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->grados->name }}</td>
                            <td>{{ $value->seccions->name }}</td>
                            <td>{{ $value->anio_academicos->name }}</td>
                            <td>{{ $value->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

@endsection
