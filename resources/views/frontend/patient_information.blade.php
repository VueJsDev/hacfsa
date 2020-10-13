@extends('layouts.frontend.master')

@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/patient-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/informacao-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/informacionpaciente-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')

    <div class="container">
        <div class="cibersalud">
        <h2>{{trans('body.patient_information')}}</h2></div>
    </div>

    <!--Cajas-->
    <?php
        $idiomacircuito   = trans('body.circuitmin');
        $idiomahorario    = trans('body.schedulesmin');
        $idiomaprohivido  = trans('body.prohibitedmin');
        $idiomaautorizado = trans('body.authorizedmin');
        $idiomapuede      = trans('body.You_canmin');
        $idiomadebe       = trans('body.You_shouldmin');

    ?>
     <div id="box" align="center">
     <div class="container">
         <a href="{{ route($idiomacircuito) }}"><div class="caja2 texto"><h8>{{trans('body.circuit')}}</h8><hr></div></a>

        <a href="{{ route($idiomahorario) }}"><div class="caja2 texto"><h8>{{trans('body.schedules')}}</h8>
           <hr></div></a>

        <a href="{{ route($idiomaprohivido) }}"><div class="caja2 texto"><h8>{{trans('body.prohibited')}}</h8><hr>
          </div></a>
     </div>
    </div>

    <div id="box" align="center">
     <div class="container">
         <a href="{{ route($idiomaautorizado) }}"><div class="caja2 texto"><h8>{{trans('body.authorized')}}</h8><hr></div></a>

        <a href="{{ route($idiomapuede) }}"><div class="caja2 texto"><h8>{{trans('body.You_can')}}</h8>
           <hr></div></a>

        <a href="{{ route($idiomapuede) }}"><div class="caja2 texto"><h8>{{trans('body.You_should')}}</h8><hr>
          </div></a>
     </div>
    </div>
@endsection
