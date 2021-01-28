@if ($errors->any())

    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">* {{ $error }}</p>
    @endforeach

@endif

<form method="post" action="{{ $action }}" class="row g-3">
    @csrf
    <div class="align-self-center col-auto">
      <label class="m-0">Usuario: </label>
    </div>
    <div class="col-auto">
        <select name="dia_semanas_id" class="form-control" autofocus>
            <option value="">-- Alumno --</option>
            @foreach ($dia_semanas as $value)
            <option value="{{$value->id}}" {{ $horario->dia_semanas_id==$value->id ? "selected" : ""}}>{{ $value->dia_semanas_id }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <select name="asignar_curso_profesors_id" class="form-control">
            <option value="">-- grupo --</option>
            @foreach ($cursos as $value)
            <option value="{{$value->id}}" {{ $horario->asignar_curso_profesors_id==$value->id ? "selected" : ""}}>{{$value->asignar_curso_profesors_id }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">{{ $btn_name }}</button>
    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">
    @endif

  </form>
  <br />

