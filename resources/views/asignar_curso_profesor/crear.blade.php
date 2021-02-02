@extends('adminlte::page')

@section('title', 'Crear Asignar curso a profesor')

@section('content_header')
    <div class="container">
        <h1 class="mt-3">Crear Asignar curso a profesor</h1>
    </div>
@stop

@section('plugins.Datatables', true)

@section('content')

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <p><a href="{{route('asignar_curso_profesor.create')}}">Regresar</a></p>
            @if (session('info'))
                <div class="alert alert-success">
                    <strong>{{session('info')}}</strong>
                </div>
            @endif
            <section class="content">
                @include('asignar_curso_profesor._form')
            </section>
        </div>
    </main>
<div class="card">
    <div class="card-body">
        <table id="tbl_listado" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>user</th>
                    <th>Curso</th>
                    <th>Grupo</th>
                    <th>Grado</th>
                    <th>Seccion</th>
                    <th>Año Academico</th>
                    <th>Created_at</th>
                    <th>Update_at</th>
                    <th>Edit</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                @php
                    //print_r($anio);
                @endphp

                @foreach ($asignar_curso_profesors as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->users->name }}</td>
                    <td>{{ $value->cursos->name }}</td>
                    <td>{{ $value->grupo_academicos->name }}</td>
                    <td>{{ $value->grupo_academicos->grados->name }}</td>
                    <td>{{ $value->grupo_academicos->seccions->name }}</td>
                    <td>{{ $value->grupo_academicos->anio_academicos->name }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td class="text-center"><a class="btn btn-primary btn-sm" href="{{ route('asignar_curso_profesor.edit',$value) }}">Editar</a></td>
                    <td class="text-center"><form action="{{ route('asignar_curso_profesor.destroy',$value)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/es.js"></script>
    <script>
        $(document).ready(function() {

            $('#tbl_listado').DataTable({
                responsive:true,
                autoWidth:false,
                "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "Nada encontrado - lo sentimos",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registrados totales)",
                "search": "Buscar:",
                "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
                },
                "order": [[ 0, "desc" ]]
            });

            $('select[name=grupo_academicos_id]').select2({
                language: "es",
            });

            $('select[name=cursos_id]').select2({
                language: "es",
            });

            $('select[name=users_id]').select2({
                language: "es",
            });

        } );
    </script>
@stop
