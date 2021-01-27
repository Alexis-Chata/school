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
        <select name="users_id" class="form-control" autofocus>
            <option value="">-- Profesor --</option>
            @foreach ($users as $value)
            <option value="{{$value->id}}" {{ $asignar_curso_profesor->users_id==$value->id ? "selected" : ""}}>{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <select name="cursos_id" class="form-control" autofocus>
            <option value="">-- Curso --</option>
            @foreach ($cursos as $value)
            <option value="{{$value->id}}" {{ $asignar_curso_profesor->cursos_id==$value->id ? "selected" : ""}}>{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <select name="grupo_academicos_id" class="form-control">
            <option value="">-- grupo --</option>
            @foreach ($grupo_academicos as $value)
            <option value="{{$value->id}}" {{ $asignar_curso_profesor->grupo_academicos_id==$value->id ? "selected" : ""}}>{{$value->name ." - ".$value->grados->name ." ". $value->seccions->name ." - " .$value->anio_academicos->name }}</option>
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

