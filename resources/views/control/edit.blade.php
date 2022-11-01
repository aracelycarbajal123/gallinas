
@extends('layouts.app', ['activePage' => 'Crear control', 'titlePage' => __('Nueva control')])



@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('control')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">EDITAR CONTROL DE ASISTENCIA</h5>      
    </div>

    <div class="card-body">

        <form method="POST" action="{{route('control.update', $control->id)}}">
            @csrf
            @method('PUT')

<form method="POST" action="{{route('control.store')}}">
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
    <label for="idperson" class="form-label">Persona</label>
   <select name="idperson" class="form-control">
    @foreach ( $person as $person )
    @if ($control->person->Nombres==$person->Nombres)
    <option selected value="{{$person->id}}">{{ $person->Nombres}} </option>  
    @endif
        <option  value="{{$person->id}}">{{ $person->Nombres}}</option>
    @endforeach
   </select>
</div>

<div class="mb-3">
    <label for="idComunidad" class="form-label">Comunidad</label>
   <select name="idComunidad" class="form-control">
    @foreach ($comunidad as $comunidad  )
    @if ($control->comunidad->nombre==$comunidad->nombre)
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
    @if ($control->vacuna->Nombre_vacuna==$vacuna->Nombre_vacuna)
    <option selected  value="{{$vacuna->id}}">{{ $vacuna->Nombre_vacuna}}</option>
    @endif
    <option value="{{$vacuna->id}}">{{ $vacuna->Nombre_vacuna}}</option>
    @endforeach
   </select>
 </div>

<div class="mb-3">
    <label for="idaves" class="form-label">Aves</label>
   <select name="idaves" class="form-control">
    @foreach ( $aves as $aves )
    @if ($control->aves->NombreAve==$aves->NombreAve)
    <option selected  value="{{$aves->id}}">{{ $aves->NombreAve}}</option>
    @endif
    <option value="{{$aves->id}}">{{ $aves->NombreAve}}</option>
    @endforeach
   </select>
 </div>



<div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input value="{{old('number')}}" type="number" class="form-control" id="number" name="cantidad">
</div>



<button type="submit" class="btn btn-primary">ACTUALIZAR</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush