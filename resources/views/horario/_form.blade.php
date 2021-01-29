@if ($errors->any())

    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">* {{ $error }}</p>
    @endforeach

@endif

<form method="post" action="{{ $action }}" class="row g-3">
    @csrf
    <div class="">
        <select name="asignar_curso_profesors_id" class="form-control">
            <option value="">-- grupo --</option>
            @foreach ($asignar_curso_profesors as $value)
            <option value="{{$value->id}}" {{ $horario->asignar_curso_profesors_id==$value->id ? "selected" : ""}}>{{ $value->cursos->name }}</option>
            @endforeach
        </select>
    </div>
    @foreach ($dia_semanas as $value)
        <div class="custom-control custom-checkbox mx-2 align-self-center">
            <input type="checkbox" class="custom-control-input" id="{{ $value->name }}" name="dia_semanas[]" value="{{ $value->id }}">
            <label for="{{ $value->name }}" class="custom-control-label">{{ Str::substr($value->name, 0, 2) }}</label>
        </div>
    @endforeach
    <div class="">
        <select name="hora_inicio" class="form-control">
            <option value="">-- hora_inicio --</option>
            @php
                intval(env('HORA_ACADEMICA'));
                echo date('g:ia');
            @endphp
            @foreach ($asignar_curso_profesors as $value)
            <option value="{{$value->id}}" {{ $horario->asignar_curso_profesors_id==$value->id ? "selected" : ""}}>{{ idate('h') }}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        <select name="hora_fin" class="form-control">
            <option value="">-- hora_fin --</option>
            @foreach ($asignar_curso_profesors as $value)
            <option value="{{$value->id}}" {{ $horario->asignar_curso_profesors_id==$value->id ? "selected" : ""}}>{{ $value->cursos->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary">{{ $btn_name }}</button>
    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">
    @endif

  </form>
  <br />

