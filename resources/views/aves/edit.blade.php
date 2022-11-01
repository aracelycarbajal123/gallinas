
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
      <h5 class="card-title">EDITAR AVE</h5>      
    </div>

    <div class="card-body">

      <form method="POST" action="{{route('aves.update', $aves->id)}}">
        @csrf
        @method('PUT')
        
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
     <label for="NombreAve" class="form-label">Ave</label>
     <input  type="text" class="form-control"  name="NombreAve" 
     value="{{$aves->NombreAve}}">

    </div>
  
  <div class="mb-3">
    <label for="Activo" class="form-label">Activo</label>
    <input  type="text" class="form-control" id="text" name="Activo" 
    value="{{$aves->Activo}}">
</div>

 

<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
<!-- /.row -->
</div>
      
  <!-- /.row -->
</div>

@endsection

@push('js')

@endpush