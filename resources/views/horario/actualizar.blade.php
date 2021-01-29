
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
            <p><a href="{{route('matricula.create')}}">Regresar</a></p>
            <section class="content">
                @include('matricula._form')
            </section>
        </div>
    </main>

@endsection

@section('js')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/es.js"></script> --}}
    <script>
        $(document).ready(function() {

            $('select[name=dia_semanas_id]').select2({
                language: "es",
            });

            $('select[name=asignar_curso_profesors_id]').select2({
                language: "es",
            });

        } );
    </script>
@stop
