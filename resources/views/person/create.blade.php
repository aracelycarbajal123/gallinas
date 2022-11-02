
@extends('layouts.app', ['activePage' => 'Crear person', 'titlePage' => __('Nueva person')])



@section('content')
<div class="row">
  <div class="col-lg-6">
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('person')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UNA NUEVA PERSONA</h5>      
    </div>

    <div class="card-body">
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
     <input value="{{old('text')}}" type="text" class="form-control"  name="Nombres" >
    </div>
  
  <div class="mb-3">
    <label for="Apellidos" class="form-label">Apellidos</label>
    <input value="{{old('text')}}" type="text" class="form-control" id="text" name="Apellidos" >
</div>

  <div class="mb-3">
    <label for="Dpi" class="form-label">Dpi</label>
    <input value="{{old('text')}}" type="text" class="form-control" id="text" name="Dpi">
</div>

  <div class="mb-3">
    <label for="Telefono" class="form-label">Telefono</label>
    <input value="{{old('text')}}" type="text" class="form-control" id="text" name="Telefono" >
  </div>
   

<div class="mb-3">
    <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento</label>
    <input value="{{old('date')}}" type="date" class="form-control" id="date" name="FechaNacimiento" >
</div>



<div class="mb-3">
    <label for="idComunidad" class="form-label">Comunidad</label>
   <select name="idComunidad" class="form-control">
    @foreach ( $comunidades as $comunidad )
        <option  value="{{$comunidad->id}}">{{ $comunidad->nombre}}</option>
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