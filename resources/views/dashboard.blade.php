@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="align-items-center" >
        <h1 class style=" text-align:center; font-weight: 900;color: #1b254e">MUNICIPALIDAD DE GUAZACAPÁN <br> PROGRAMA MUNICIPAL GALLINAS PONEDORAS</h1>

      </div>
        <br>
        <p style="text-align:center">La oficina Municipal de Seguridad alimentaria y nutricional coordina acciones para reducen y previenen la desnutrición crónica con distintos programas en las comunidades del municipio. “Gallinas Ponedoras” es un programa a cargo de la oficina de Seguridad alimentaria y nutricional el cual le hace entrega de gallinas ponedoras a familia de escasos recursos, capacita la crianza y brindan concentrado especial para este tipo de aves. 
          Además, buscan la prevención de las enfermedades como Newcastle y la viruela aviar, por tal motivo desde el ingreso de las aves y cada dos meses se les aplica dosis vacunas para prevenir estas enfermedades.</p>
            <br>
            <img src="{{ asset('dist/img/gallina.jpg')}}" alt="00" width="1050px"  aling="center"> 
        </p>   
        <br>
      </div>
    </div>
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

