@extends('layouts.frontend.master')

@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/aboutus-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/instituicao-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/institucion-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')
        
    <!--Cajas-->
    <div class="container">
     <div id="cajas" align="center">
        <?php
            $idiomahistoria = trans('body.insthistory');
            $idioauto       = trans('menu.authoritiesmin');
            $idiomision     = trans('body.missionvisionmin');
            $idiovalue      = trans('body.valuesmin');

        ?>

       <a href="{{ route($idiomahistoria) }}"><div class="caja2 texto"><h8>{{trans('body.history')}}</h8><hr></div></a>

        <a href="{{ route($idioauto) }}"><div class="caja2 texto"><h8>{{trans('body.authorities')}}</h8>
         <hr></div></a>

        <a href="{{ route($idiomision) }}"><div class="caja2 texto"><h8>{{trans('body.missionvision')}}</h8><hr></div></a>

        <a href="{{ route($idiovalue) }}"><div class="caja2 texto"><h8>{{trans('body.values')}}</h8><hr>
          </div></a>

     </div>
    </div>
@endsection
