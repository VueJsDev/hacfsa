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
          <h2>Jornadas / Expo Mantenimiento Hospitalario 2017</h2>
          <div class="barra"></div>
              <div class="container-fluid">
                <div class="row">

                  <section>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/afiche-mantenimientohospitalario.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/afiche-mantenimientohospitalario.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/1.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/1.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/2.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/2.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/3.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/3.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/4.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/4.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/5.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/5.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/6.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/6.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/7.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/7.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/8.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/8.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/9.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/9.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/10.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/10.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/11.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/11.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/12.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/12.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/13.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/13.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/14.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/14.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/15.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/15.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/16.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/16.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/17.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/17.jpg')}}"></div></a>


                     <a href="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/18.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/expo-mantenimiento-hospitalario/18.jpg')}}"></div></a>

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