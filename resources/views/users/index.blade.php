@extends('layouts.app', ['activePage' => 'Usuarios', 'titlePage' => __('Usuarios')])

@section('header')
<h2>Listado de Usuarios</h2>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('users.create')}}" class="btn btn-info text-white">Nuevo Usuario</a>
  </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Rol</th>
      <th scope="col">Opciones</th>


    </tr>
  </thead>
   <tbody>

 @foreach ($users as $key=> $user )
    <tr>
      <th scope="row">{{ $key}}</th>
   
      <td>{{ $user->name}}</td>
      <td>{{ $user->username}}</td>
      <td>{{ $user->email}}</td>
      <td>{{ $user->rol}}</td>
      <td class="d-flex justify-content-around">
        <a href="{{route('users.edit', $user->id)}}"> <i class="fas fa-pencil-alt text-warning">Edit</i></a>
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
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