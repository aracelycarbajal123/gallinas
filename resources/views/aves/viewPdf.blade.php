<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

  <title>PDF</title>
</head>
<img src="{{public_path('dist/img/munilogo.png' )}}" width="150px" alt="" style="float: right;" >
<body class="container text-center">
 
  <div class="row">
    <div class="col-6">
  <table class="table table-striped ">
    <span class style=" font-weight: 900;color: #0e2fb5">MUNICIPALIDAD DE GUAZACAPÁN </span>
    <P style=" font-weight: 900;color: #0e2fb5" >PROGRAMA MUNICIPAL GALLINAS PONEDORAS</P>
    
    </div>
    <div class="col-3">
        <table class="table table-bordered border-secondary">
            <thead>
                <tr>
                  <th scope="col">#REPORTE</th>
                  <th scope="col">FECHA</th>
                  <th scope="col">FIRMA</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ substr($keygen, 0, 4)  }}</th>
                  
                  
                  <td> {{\Carbon\Carbon::now()->toDateString()}}</td>
                  <td>____________________</td>
                </tr>
              
              </tbody>
            
          </table>
    </div>
 <div class="container p-5">
 
   </div>
   <h3 class="alert alert-secondary ">GALLINAS</h3>
  <table class="table table-striped ">
    <thead class="alert alert-secondary">
        <tr class="border border-secondary">
          <th class="fs-6 border border-secondary">ID</th>

          <th class="fs-6 border border-secondary">RAZA DE GALLINAS</th>


         
         
          

        </tr>
    </thead>
    <tbody id="todos-list" name="todos-list">

      @foreach ($data as $aves )
      <tr>
        <th scope="row">{{ $aves->id}}</th>
        <td>{{ $aves->NombreAve}}</td>
    
  
  
      </tr>
      @endforeach

    </tbody>
</table>

 </div>      

</body>
</html>
