@extends('layouts.frontend.master')

@section('style_fron')
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

       <a href="{{ route('teaching') }}"><div class="col-md-2 articulo"><h1>DOCENCIA E INVESTIGACIÓN</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Jornadas y Simposios de Capacitación</h2>
          <div class="barra"></div>
              <div class="container-fluid">

                <a href="{{route('jornada-pediatria-18')}}"><div class="col-md-2 ateneo">
                 <img src="{{ asset('assets/frontend/images/album/simposios/jornadas-pediatria-18/afiche-pediatria-18.jpg')}}">
                 <div class="forma"><h1>Jornada de Pediatría 2018</h1></div>
                 </div></a>

                <a href="{{route('jornada-enfermeria-18')}}"><div class="col-md-2 ateneo">
                 <img src="{{ asset('assets/frontend/images/album/simposios/simposio-enfermeria-2018/afiche-enfermeria-18.png')}}">
                 <div class="forma"><h1>Simposio de Enfermería 2018</h1></div>
                 </div></a>

                <a href="{{route('jornada-neurociencias2018')}}"><div class="col-md-2 ateneo">
                 <img src="{{ asset('assets/frontend/images/album/simposios/jornada-neurociencia-2018/afiche-neurociencias-2018-a.jpg')}}">
                 <div class="forma"><h1>Jornada de Neurociencias 2018</h1></div>
                 </div></a>
                
                <a href="{{route('endoscopia2018')}}"><div class="col-md-2 ateneo">
                 <img src="{{ asset('assets/frontend/images/album/simposios/jornada-endoscopia-2018/aficheEndoscopia2018.jpg')}}">
                 <div class="forma"><h1>Jornada de Endoscopía 2018</h1></div>
                 </div></a>
                
                <a href="{{route('anestesiologia2018')}}">
                    <div class="col-md-2 ateneo">
                        <img src="{{ asset('assets/frontend/images/album/simposios/jornada-anestesiologia-2018/afiche-anestesiologia-2018.jpg')}}">
                        <div class="forma"><h1>Jornada de Anestesiología 2018</h1></div>
                    </div>
                </a>

                <a href="{{route('kinesiologia2018')}}">
                    <div class="col-md-2 ateneo">
                        <img src="{{asset('assets/frontend/images/album/simposios/jornada-kinesiologia-2018/afiche-kinesiologia-2018.jpg')}}">
                        <div class="forma"><h1>Jornada de Kinesiología 2018</h1></div>
                    </div>
                </a>

                 <a href="{{route('hospitalaria')}}">
                    <div class="col-md-2 ateneo">
                        <img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/afiche-mantenimientohospitalario.jpg')}}">
                        <div class="forma"><h1>Expo Mantenimiento Hospitalaria 2017</h1></div>
                    </div>
                 </a>
                 
                 <a href="{{route('cardiologia')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/simposio-cardiologia/afiche-cardiologia-2017.jpg')}}">
                 <div class="forma"><h1>Simposio de Cardiología 2017</h1></div>
                 </div></a>

                 <a href="{{route('ginecologia')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/jornadas-ginecologia/afiche-ginecologia.jpg')}}">
                 <div class="forma"><h1>Jornada de Ginecología 2017</h1></div>
                 </div></a>

                 <a href="{{route('laboral')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/jornadas-medicinalaboral/afiche-medicinalaboral.jpg')}}">
                 <div class="forma"><h1>Jornada de Medicina Laboral 2017</h1></div>
                 </div></a>

                 <a href="{{route('pediatria')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/jornadas-pediatria/afiche-pediatria.jpg')}}">
                 <div class="forma"><h1>Jornada de Pediatría 2017</h1></div>
                 </div></a>

                 <a href="{{route('neuro')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/afiche-neurociencias.jpg')}}">
                 <div class="forma"><h1>Jornada de Neurociencias 2017</h1></div>
                 </div></a>

                 <a href="{{route('enfermeria')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/simposio-enfermeria/afiche-enfermeria.jpg')}}">
                 <div class="forma"><h1>Simposio de Enfermería 2017</h1></div>
                 </div></a>

                 <a href="{{route('kinesiologia')}}"><div class="col-md-2 ateneo">
                 <img src="{{asset('assets/frontend/images/album/simposios/jornadas-kinesiologia/afiche-kinesiologia.jpg')}}">
                 <div class="forma"><h1>Jornada de Kinesiología 2017</h1></div>
                 </div></a>

       </div>
       </div>

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