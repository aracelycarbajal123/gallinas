@extends('layouts.app', ['activePage' => 'Comunidades', 'titlePage' => __('Comunidades')])

@section('header')
<h2>Listado de Comunidades</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('comunidad.create')}}" class="btn btn-info text-white">Nueva comunidad</a>
@if ($message = Session:: get('success'))
   <div class="alert alert-success">
    <p>{{$message }}</p>
   </div>
   @endif
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Ubicacion</th>
      <th scope="col">Estado</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($comunidades as $comunidad )
      
   
    <tr>
      <th scope="row">{{ $comunidad->id}}</th>
      <td>{{ $comunidad->nombre}}</td>
      <td>{{ $comunidad->localizacion}}</td>
      <td>{{ $comunidad->estado}}</td>
      <td class="d-flex justify-content-around">
        <a href="{{route('comunidad.edit', $comunidad->id)}}"> <i class="fas fa-pencil-alt text-warning"></i>Edit</a>
        <form action="{{route('comunidad.destroy', $comunidad->id)}}" method="POST">
          @csrf 
          {{method_field('delete')}}
          <button type="submit"> <i class="fas fa-trash-alt text-red-500"></i>Delete</button>
        </form>

      </td>



    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush