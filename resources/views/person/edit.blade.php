
@extends('layouts.app', ['activePage' => 'Crear person', 'titlePage' => __('Nueva person')])



@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('person')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">EDITAR PERSONA</h5>      
    </div>

    <div class="card-body">
        
        <form method="POST" action="{{route('person.update', $person->id)}}">
            @csrf
            @method('PUT')

<form method="POST" action="{{route('person.store')}}">
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
     <label for="Nombres" class="form-label">Nombre de la Persona</label>
     <input  type="text" class="form-control"  name="Nombres" 
     value="{{$person->Nombres}}">
    </div>
  
  <div class="mb-3">
    <label for="Apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="text" name="Apellidos" 
    value="{{$person->Apellidos}}" >
</div>

  <div class="mb-3">
    <label for="Dpi" class="form-label">Dpi</label>
    <input  type="text" class="form-control" id="text" name="Dpi"
    value="{{$person->Dpi}}">
</div>

  <div class="mb-3">
    <label for="Telefono" class="form-label">Telefono</label>
    <input  type="text" class="form-control" id="text" name="Telefono"
    value="{{$person->Telefono}}" >
  </div>
   
  <div class="mb-3">
    <label for="Email" class="form-label">Email</label>
    <input  type="text" class="form-control" id="text" name="Email"
    value="{{$person->Email}}" >
</div>

<div class="mb-3">
    <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento</label>
    <input  type="date" class="form-control" id="date" name="FechaNacimiento"
    value="{{$person->FechaNacimiento}}" >
</div>

<div class="mb-3">
    <label for="Activo" class="form-label">Activo</label>
    <input type="text" class="form-control" id="text" name="Activo"
    value="{{$person->Activo}}"  >
</div>

<div class="mb-3">
    <label for="idComunidad" class="form-label">Comunidad</label>
   <select name="idComunidad" class="form-control">
    @foreach ($comunidad as $comunidad  )
    @if ($person->comunidad->nombre==$comunidad->nombre)
    <option selected value="{{$comunidad->id}}">{{ $comunidad->nombre}} </option>  
    @endif
        <option  value="{{$comunidad->id}}">{{ $comunidad->nombre}} </option>
    @endforeach
   </select>
 </div>





<button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush