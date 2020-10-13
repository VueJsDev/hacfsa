
@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/ourservices-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/servicos-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/servicios-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')


  <div class="container">
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    @foreach ($departamento_servicios as $dpto)
        @if(count($dpto['servicios']) != 0)
          @include('frontend.modulosfron.cargadeptoandservice')
        @endif
    @endforeach
  </div>


    <div class="container presentacion" align="center">
    <h6>{!!trans('body.footer2')!!}</h6>
      </div>
@endsection
