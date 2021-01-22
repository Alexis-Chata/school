
@extends('adminlte::page')

@section('title', 'Editar Curso')

@section('content_header')
    <div class="container">
        <h1 class="mt-3">Editar Curso</h1>
    </div>
@stop

@section('content')

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <p><a href="{{route('grupo_academico.create')}}">Regresar</a></p>
            <section class="content">
                @include('grupo_academico._form')
            </section>
        </div>
    </main>

@endsection
