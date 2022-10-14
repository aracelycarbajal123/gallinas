
@extends('layouts.app', ['activePage' => 'Crear vacuna', 'titlePage' => __('Nueva vacuna')])



@section('content')
<div class="row">
  <div class="col-lg-6">
search
  </div>
  <div class="col-lg-6 d-flex justify-content-end">
<a href="{{route('vacuna')}}" class="btn btn-info text-white">Regresar</a>
  </div>
</div>
<div class="card mt-3">
    <div class="card-header">
      <h5 class="card-title">REGISTRE UN NUEVO LOTE DE VACUNA</h5>      
    </div>

    <div class="card-body">
<form method="POST" action="{{route('vacuna.store')}}">
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
     <label for="Nombre_vacuna" class="form-label">Nombre de la Vacuna</label>
     <input value="{{old('name')}}" type="text" class="form-control"  name="Nombre_vacuna" >
    </div>
  
  <div class="mb-3">
    <label for="Fecha_ingresovacuna" class="form-label">Fecha ingreso de la Vacuna</label>
    <input value="{{old('date')}}" type="date" class="form-control" id="date" name="Fecha_ingresovacuna" >
</div>

  <div class="mb-3">
    <label for="Stockvacuna" class="form-label">Stock</label>
    <input value="{{old('number')}}" type="number" class="form-control" id="number" name="Stockvacuna">
</div>

  <div class="mb-3">
    <label for="Lote" class="form-label">Lote</label>
    <input value="{{old('text')}}" type="text" class="form-control" id="text" name="Lote" >
  </div>
   
  <div class="mb-3">
    <label for="FechaVencimiento" class="form-label">Fecha de Vencimiento</label>
    <input value="{{old('date')}}" type="date" class="form-control" id="date" name="FechaVencimiento" >
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