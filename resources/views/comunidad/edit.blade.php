
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
      <h5 class="card-title">EDITAR COMUNIDAD</h5>      
    </div>

    <div class="card-body">

<form method="POST" action="{{route('comunidad.update', $comunidad->id)}}">
    @csrf
    @method('PUT')


    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre de la comunidad</label>
      <input  type="text" class="form-control" id="name" name="nombre"
      value="{{$comunidad->nombre}}" >
  </div>


  <div class="mb-3">
    <label for="localizacion" class="form-label">Ubicacion</label>
    <input type="text" class="form-control" id="localizacion" name="localizacion"
    value="{{$comunidad->localizacion}}>">
</div>
   
   

     
      <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  <!-- /.row -->
</div>

@endsection


