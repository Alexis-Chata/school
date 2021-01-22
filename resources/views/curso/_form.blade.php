@if ($errors->any())

    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">* {{ $error }}</p>
    @endforeach

@endif

<form method="post" action="{{ $action }}" class="row g-3">
    @csrf
    <div class="align-self-center col-auto">
      <label class="m-0">curso: </label>
    </div>
    <div class="col-auto">
      <input type="text" name="name" class="form-control" placeholder="Curso" value="{{ $curso->name }}" autofocus>
    </div>
    <div class="col-auto">
        <select name="grados_id" class="form-control">
            <option value="">--SELECCIONAR--</option>
            @foreach ($grados as $value)
            <option value="{{$value->id}}" {{ $curso->grados_id==$value->id ? "selected" : ""}}>{{$value->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <select name="anio_academicos_id" class="form-control">
            <option value="">--&nbsp;SELECCIONAR&nbsp;--</option>
            @foreach ($anios as $value)
            <option value="{{$value->id}}" {{ $curso->anio_academicos_id==$value->id ? "selected" : (date("Y") == $value->name ? "selected" : "") }}>{{$value->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
    @if (!empty($put))
        <input type="hidden" name="_method" value="PUT">
    @endif

  </form>
  <br />
