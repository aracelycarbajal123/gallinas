@extends('layouts.app', ['activePage' => 'person', 'titlePage' => __('person')])

@section('header')
<h2>LISTADO DE PERSONASs</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('person.create')}}" class="btn btn-info text-white">Nueva Persona </a>
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dpi</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">FechaNacimiento</th>
      <th scope="col">Activo</th>
      <th scope="col">idComunidad</th>
      <th scope="col">Tipopersona</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($person as $pers )
      
   
    <tr>
      <th scope="row">{{ $pers->id}}</th>
      <td>{{ $pers->Nombres}}</td>
      <td>{{ $pers->Apellidos}}</td>
      <td>{{ $pers->Dpi}}</td>
      <td>{{ $pers->Telefono}}</td>
      <td>{{ $pers->Email}}</td>
      <td>{{ $pers->FechaNacimiento}}</td>
      <td>{{ $pers->Activo}}</td>
      <td>{{ $pers->comunidad->nombre}}</td>
      <td>{{ $pers->Tipopersona}}</td>
     
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