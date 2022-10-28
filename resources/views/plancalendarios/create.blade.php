
@extends('layouts.app', ['activePage' => 'Crear plancalendarios', 'titlePage' => __('Nueva plancalendarios')])



@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('plancalendarios')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UNA NUEVA PLANIFICACION</h5>      
    </div>

    <div class="card-body">
<form method="POST" action="{{route('plancalendarios.store')}}">
    @csrf
    @if ($errors->any())
  <div class="alert alert-danger">
      <strong>Lo siento!</strong> Debes de corregir los siguientes errores:.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


    <div class="mb-3">
     <label for="FechaVacunacion" class="form-label">Fecha de Vacunacion</label>
     <input value="{{old('date')}}" type="date" class="form-control"  name="FechaVacunacion" >
    </div>
  
  <div class="mb-3">
    <label for="Estado" class="form-label">Estado</label>
    <input value="{{old('text')}}" type="text" class="form-control" id="text" name="Estado" >
</div>

<div class="mb-3">
    <label for="idComunidad" class="form-label">Comunidad</label>
   <select name="idComunidad" class="form-control">
    @foreach ( $comunidades as $comunidad )
        <option  value="{{$comunidad->id}}">{{ $comunidad->nombre}}</option>
    @endforeach
   </select>
</div>

<div class="mb-3">
    <label for="idvacuna" class="form-label">Vacuna</label>
   <select name="idvacuna" class="form-control">
    @foreach ( $vacuna as $vacuna )
        <option  value="{{$vacuna->id}}">{{ $vacuna->Nombre_vacuna}}</option>
    @endforeach
   </select>
</div>




<button type="submit" class="btn btn-primary">Registrar</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush