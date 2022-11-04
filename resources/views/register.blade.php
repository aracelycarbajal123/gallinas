@extends('layouts.authenticate');

@section('title','REGISTRO')
@section('content')
<div class="container-fluid">



    <div class="row">
    <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <img src="{{ asset('dist/img/munilogo.png')}}" class="img-fluid" alt="" srcset="">
          </div>
        </div>
      </div>    
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">REGISTRARSE EN EL SISTEMA</h5>      
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
                
               
                <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            <!-- /.row -->
          </div>

         
        </div>

      </div>

    </div>
  </div><!--/. container-fluid -->

@endsection
