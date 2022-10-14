@extends('layouts.app', ['activePage' => 'plancalendarios', 'titlePage' => __('plancalendarios')])

@section('header')
<h2>PLANIFICACION DE CALENDARIOS</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('plancalendarios.create')}}" class="btn btn-info text-white">Nueva Planificacion </a>
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FechaVacunacion</th>
      <th scope="col">Estado</th>
      <th scope="col">idComunidad</th>
      <th scope="col">idvacuna</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($plancalendarios as $plancalendarios )
   

    <tr>
      <th scope="row">{{ $plancalendarios->id}}</th>
      <td>{{ $plancalendarios->FechaVacunacion}}</td>
      <td>{{ $plancalendarios->Estado}}</td>
      <td>{{ $plancalendarios->comunidad->nombre}}</td>
      <td>{{ $plancalendarios->vacuna->Nombre_vacuna}}</td>
    
     
      <td class="d-flex justify-content-around">
        <a href="#"> <i class="fas fa-pencil-alt text-warning"></i></a>
        <a href="#"> <i class="fas fa-trash-alt text-danger"></i></a>

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