
@extends('adminlte::page')

@section('title', 'Editar Evaluacion')

@section('content_header')
    <div class="container">
        <h1 class="mt-3">Editar Evaluacion</h1>
    </div>
@stop

@section('content')

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <p><a href="{{route('evaluacion.create')}}">Regresar</a></p>
            <section class="content">
                @include('evaluacion._form')
            </section>
        </div>
    </main>

@endsection
