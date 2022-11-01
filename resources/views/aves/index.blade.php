@extends('layouts.app', ['activePage' => 'aves', 'titlePage' => __('aves')])

@section('header')
<h2>Lotes de Aves</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('aves.create')}}" class="btn btn-info text-white">Nuevo ingreso de Ave</a>
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
      <th scope="col">Ave</th>
      <th scope="col">Activo</th>
      
      
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>

    @foreach ($Aves as $aves )
      
   
    <tr>
      <th scope="row">{{ $aves->id}}</th>
      <td>{{ $aves->NombreAve}}</td>
      <td>{{ $aves->Activo}}</td>
      
      <td class="d-flex justify-content-around">
        <a href="{{route('aves.edit', $aves->id)}}"> <i class="fas fa-pencil-alt text-warning"></i>Edit</a>
        <form action="{{route('aves.destroy', $aves->id)}}" method="POST">
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

