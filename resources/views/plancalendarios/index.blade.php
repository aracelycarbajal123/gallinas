@extends('layouts.app', ['activePage' => 'plancalendarios', 'titlePage' => __('plancalendarios')])

@section('header')
<h2>PLANIFICACION DE CALENDARIOS</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('plancalendarios.create')}}" class="btn btn-info text-white">Nueva Planificacion </a>
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
      <th scope="col">Fecha de vacunacion</th>
      
      <th scope="col">Comunidad</th>
      <th scope="col">vacuna</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($plancalendarios as $plancalendario )
   

    <tr>
      <th scope="row">{{ $plancalendario->id}}</th>
      <td>{{ $plancalendario->FechaVacunacion}}</td>
      
      <td>{{ $plancalendario->comunidad->nombre}}</td>
      <td>{{ $plancalendario->vacuna->Nombre_vacuna}}</td>
    
      <td class="d-flex justify-content-around">
        <a href="{{route('plancalendarios.edit', $plancalendario->id)}}"> <i class="fas fa-pencil-alt text-warning"></i>Edit</a>
        <form action="{{route('plancalendarios.destroy', $plancalendario->id)}}" method="POST">
          @csrf 
          {{method_field('delete')}}
          <button type="submit"> <i class="fas fa-trash-alt text-red-500"></i>Delete</button>
        </form>
      
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