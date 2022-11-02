
@extends('layouts.app', ['activePage' => 'Crear aves', 'titlePage' => __('Nueva ave')])



@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('plancalendarios')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">EDITAR CALENDARIO</h5>      
    </div>

    <div class="card-body">

      <form method="POST" action="{{route('plancalendarios.update', $plancalendarios->id)}}">
        @csrf
        @method('PUT')
        
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
    <input type="date" class="form-control"  name="FechaVacunacion"
    value="{{$plancalendarios->FechaVacunacion}}"  >
   </div>
 


<div class="mb-3">
   <label for="idComunidad" class="form-label">Comunidad</label>
  <select name="idComunidad" class="form-control">
   @foreach ($comunidad as $comunidad  )
   @if ($plancalendarios->comunidad->nombre==$comunidad->nombre)
   <option selected value="{{$comunidad->id}}">{{ $comunidad->nombre}} </option>  
   @endif
       <option  value="{{$comunidad->id}}">{{ $comunidad->nombre}} </option>
   @endforeach
  </select>
</div>

<div class="mb-3">
   <label for="idvacuna" class="form-label">Vacuna</label>
  <select name="idvacuna" class="form-control">
   @foreach ( $vacuna as $vacuna )
   @if ($plancalendarios->vacuna->Nombre_vacuna==$vacuna->Nombre_vacuna)
   <option selected  value="{{$vacuna->id}}">{{ $vacuna->Nombre_vacuna}}</option>
   @endif
   <option value="{{$vacuna->id}}">{{ $vacuna->Nombre_vacuna}}</option>
   @endforeach
  </select>
</div>

   
<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush