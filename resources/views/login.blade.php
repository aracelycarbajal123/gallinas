@extends('layouts.authenticate');

@section('title','INGRESO')
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
            <h5 class="card-title">INGRESO AL SISTEMA</h5>      
          </div>
          <div class="card-body">
            <form method="POST" action="{{route('login')}}" novalidate>
              @csrf
              @if ($errors->any())
              <div class="alert alert-danger">
                  <strong>Lo siento!</strong> Debes de corregir los siguientes errores:<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
              @if (session('msg'))
              <div class="alert alert-danger" role="alert">
                {{ session('msg')}}
              </div>
              @endif
          
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <div class="mb-5">
                  <input type="checkbox" name="remember"> <label> Mantener mi sesión abierta </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <!-- /.row -->
          </div>

         
        </div>

      </div>

    </div>
  </div><!--/. container-fluid -->

@endsection
