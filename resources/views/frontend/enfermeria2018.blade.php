@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.css') }}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/jornada-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
$idiomaservice = trans('menu.servicesmin');

?>

  <!--Cajas Izquierda -->

<div class="container">
      
      <div class="col-lg-12 clearfix">
  
         <a href="{{route('capacitacion')}}"><div class="col-md-2 articulo"><h1>JORNADAS Y SIMPOSIOS DE CAPACITACIÓN</h1></div></a>
  
         <div class="segundo col-lg-12 rigth">
            <h2>Simposio / Simposio de Enfermería 2018</h2>
            <div class="barra"></div>
                <div class="container-fluid">
                  <div class="row">
                    
                    <section>
                      <a href="{{ asset('assets/frontend/images/album/simposios/simposio-enfermeria-2018/afiche-enfermeria-18.png')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/simposio-enfermeria-2018/afiche-enfermeria-18.png')}}"></div></a>
                      @for ($i = 1; $i < 98; $i++)
                        <a href="{{asset('assets/frontend/images/album/simposios/simposio-enfermeria-2018/'.$i.'.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/simposio-enfermeria-2018/'.$i.'.jpg')}}"></div></a>
                      @endfor
                      
                    </section>
  
         </div></div></div>
   
      </div>      
  </div>

 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection

@section('script_ateneos')

<script src="{{ asset('assets/frontend/js/lightbox-plus-jquery.min.js') }}"></script>


@endsection