@extends('layouts.frontend.master')

@section('style_fron')


@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/actividad-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
$idiomaservice = trans('menu.servicesmin');

?>

  <!--Cajas Izquierda -->

<div class="container">

    <div class="col-lg-12 clearfix">

       <a href="{{ route('teaching') }}"><div class="col-md-2 articulo"><h1>DOCENCIA E INVESTIGACIÓN</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Actividad / Docencia</h2>
          <div class="barra"></div>
              <div class="container-fluid">
                
              <a href="{{route('capacitacion-2018')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/charlas/capacitacion-2018/portada.jpg')}}">
                 <div class="forma"><h1>Capacitación sobre "Correcto Manejo de la Instrumentación de vía Urinaria" </h1></div>
                 </div></a>

              <a href="{{route('taller-peritonitis')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/charlas/taller-peritonitis/portada.jpg')}}">
                 <div class="forma"><h1>Taller sobre Peritonitis</h1></div>
                 </div></a>

              <a href="{{ route('calidad-atencion') }}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/charlas/taller-calidadeatencion/portada.jpg')}}">
                 <div class="forma"><h1>Taller sobre Mejora en Calidad de Atención</h1></div>
                 </div></a>
                 
                <a href="{{ route('charla-enfermeria') }}"><div class="col-md-2 ateneo">
                <img src="{{asset('assets/frontend/images/album/charlas/indicaciones/portada.jpg')}}">
                <div class="forma"><h1>Charla Informativa dirigida a médicos y personal de Enfermería</h1></div>
                </div></a>

       </div></div>

    </div>
</div>

 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection