@extends('layouts.app', ['activePage' => 'vacuna', 'titlePage' => __('vacuna')])

@section('header')
<h2>Lotes de Vacunas</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('vacuna.create')}}" class="btn btn-info text-white">Nuevo Lote de Vacuna</a>
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre vacuna</th>
      <th scope="col">Fecha de ingreso</th>
      <th scope="col">Stock</th>
      <th scope="col">Lote</th>
      <th scope="col">Fecha de Vencimiento</th>
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($vacuna as $vacuna )
      
   
    <tr>
      <th scope="row">{{ $vacuna->id}}</th>
      <td>{{ $vacuna->Nombre_vacuna}}</td>
      <td>{{ $vacuna->Fecha_ingresovacuna}}</td>
      <td>{{ $vacuna->Stockvacuna}}</td>
      <td>{{ $vacuna->Lote}}</td>
      <td>{{ $vacuna->FechaVencimiento}}</td>

      <td class="d-flex justify-content-around">
        <a href="{{route('vacuna.edit', $vacuna->id)}}"> <i class="fas fa-pencil-alt text-warning"></i>Edit</a>
        <form action="{{route('vacuna.destroy', $vacuna->id)}}" method="POST">
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