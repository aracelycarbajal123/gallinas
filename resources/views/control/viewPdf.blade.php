<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

  <title>Document</title>
</head>
<body class="container text-center">
   
  <div class="row ">
    <div class="col-6">
    
      <img src="{{public_path('dist/img/munilogo.png')}}" width="60px" alt="">
    </div>
    <div class="col-6">
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                  <th scope="col">#REPORTE</th>
                  <th scope="col">USUARIO</th>
                  <th scope="col">FECHA</th>
                  <th scope="col">FIRMA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ substr($keygen, 0, 4)  }}</th>
                  <td>MARLEN CARBAJAL</td>
                  <td> {{\Carbon\Carbon::now()->toDateString()}}</td>
                  <td>____________________</td>
                </tr>
              
              </tbody>
            
          </table>
    </div>
 <div class="container p-5">
 

   </div>
   <h3 class="alert alert-primary ">Control de Vacunacion</h3>
  
  <table class="table table-striped ">
    <thead class="alert alert-secondary">
        <tr class="border border-secondary">
          <th class="fs-6 border border-secondary">ID</th>
          <th class="fs-6 border border-secondary">BENEFICIARIO</th>
          <th class="fs-6 border border-secondary">COMUNIDAD</th>
          <th class="fs-6 border border-secondary">VACUNA</th>
          {{-- <th class="fs-6 border border-secondary">EDAD</th> --}}
          <th class="fs-6 border border-secondary">AVES</th>
          <th class="fs-6 border border-secondary">CANTIDAD</th>

          

        </tr>
    </thead>
    <tbody id="todos-list" name="todos-list">
        @foreach ($data as $control)
        <tr>
        <th scope="row">{{ $control->id}}</th>
        <td>{{ $control->person->Nombres}} {{$control->person->Apellidos}}</td>
        <td>{{ $control->comunidad->nombre}}</td>
        <td>{{ $control->vacuna->Nombre_vacuna}}</td>
        <td>{{ $control->aves->NombreAve}}</td>
        <td>{{ $control->cantidad}}</td>
    </tr>
        @endforeach
    </tbody>
</table>

 </div>
 

 
</body>
</html>
