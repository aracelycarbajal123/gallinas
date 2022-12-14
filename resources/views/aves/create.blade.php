
@extends('layouts.app', ['activePage' => 'Crear aves', 'titlePage' => __('Nueva ave')])



@section('content')
<div class="row">
  <div class="col-lg-6">

  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('aves')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UN NUEVO REGISTRO DE AVE</h5>      
    </div>

    <div class="card-body">
<form method="POST" action="{{route('aves.store')}}">
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
     <label for="NombreAve" class="form-label">RAZA DE GALLINA</label>
     <input value="{{old('name')}}" type="text" class="form-control"  name="NombreAve" >
    </div>
  

 

<button type="submit" class="btn btn-primary">Registrar</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush