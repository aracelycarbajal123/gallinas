@extends('layouts.app', ['activePage' => 'control', 'titlePage' => __('control')])

@section('header')
<h2>CONTROL DE ASISTENCIA DE VACUNACION</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('control.create')}}" class="btn btn-info text-white">Nueva Asistencia</a>
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Beneficiario</th>
      <th scope="col">Comunidad</th>
      <th scope="col">Vacuna</th>
      <th scope="col">Aves</th>
      <th scope="col">Cantidad</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($control as $control )
   

    <tr>
      <th scope="row">{{ $control->id}}</th>
      <td>{{ $control->person->Nombres}} {{$control->person->Apellidos}}</td>
      <td>{{ $control->comunidad->nombre}}</td>
      <td>{{ $control->vacuna->Nombre_vacuna}}</td>
      <td>{{ $control->aves->NombreAve}}</td>
      <td>{{ $control->cantidad}}</td>

    
     
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