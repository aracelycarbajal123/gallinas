
@extends('layouts.app', ['activePage' => 'Crear Comunidad', 'titlePage' => __('Nueva comunidad')])



@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('comunidades')}}" class="btn btn-info text-white">Retornar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UNA NUEVA COMUNIDAD</h5>      
    </div>

    <div class="card-body">
<form method="POST" action="{{route('comunidad.store')}}">
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
      <label for="nombre" class="form-label">Nombre de la comunidad</label>
      <input value="{{old('name')}}" type="text" class="form-control" id="name" name="nombre" >
  </div>
  <div class="mb-3">
    <label for="localizacion" class="form-label">Ubicacion</label>
    <input value="{{old('localizacion')}}" type="text" class="form-control" id="localizacion" name="localizacion" aria-describedby="localizacion">
</div>
   
   

     
      <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush