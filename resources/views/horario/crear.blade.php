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
    </main>

@endsection
