
@extends('layouts.app', ['activePage' => 'Crear Usuario', 'titlePage' => __('Nuevo usuario')])



@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('users')}}" class="btn btn-info text-white">Retornar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UN NUEVO USUARIO</h5>      
    </div>

    <div class="card-body">
<form method="POST" action="{{route('register')}}">
    @csrf
    @if ($errors->any())
  <div class="alert alert-danger">
      <strong>Lo siento!</strong> Debes de corregir los siguientes errores:.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Usuario</label>
    <input value="{{old('username')}}" type="text" class="form-control" id="username" name="username" aria-describedby="username">
</div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input value="{{old('email')}}" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
      
      </div>
     
      <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input  type="password" name="password" class="form-control" id="password">
      </div>
      <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
          <input  type="password" name="password_confirmation" class="form-control" id="password">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="rol">Options</label>
        </div>
        <select name="rol" class="custom-select" id="rol">
          <option selected>Elija un Rol...</option>
          <option value="beneficiario">Beneficiario</option>
          {{-- @if ($user=='admin') --}}
          
          <option value="digitador">Digitador</option>
          <option value="admin">Admin</option>
          {{-- @endif --}}
          
         
        </select>
      </div>
     
      <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  <!-- /.row -->
</div>

@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush