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
      <th scope="col">Estado</th>
      <th scope="col">Comunidad</th>
      <th scope="col">vacuna</th>
      
      <th scope="col">Opciones</th>


    </tr>.
  </thead>m
  <tbody>

    @foreach ($plancalendarios as $plancalendarios )
   

    <tr>
      <th scope="row">{{ $plancalendarios->id}}</th>
      <td>{{ $plancalendarios->FechaVacunacion}}</td>
      <td>{{ $plancalendarios->Estado}}</td>
      <td>{{ $plancalendarios->comunidad->nombre}}</td>
      <td>{{ $plancalendarios->vacuna->Nombre_vacuna}}</td>
    
      <td class="d-flex justify-content-around">
        <a href="{{route('plancalendarios.edit', $plancalendarios->id)}}"> <i class="fas fa-pencil-alt text-warning"></i>Edit</a>
        <form action="{{route('plancalendarios.destroy', $plancalendarios->id)}}" method="POST">
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