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

       <a href="{{ route('capacitacion') }}"><div class="col-md-2 articulo"><h1>JORNADAS Y SIMPOSIOS DE CAPACITACIÓN</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Jornadas / Jornada de Neurociencia 2017</h2>
          <div class="barra"></div>
              <div class="container-fluid">
                <div class="row">

                  <section>
                    <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/afiche-neurociencias.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/afiche-neurociencias.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/1.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/1.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/2.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/2.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/3.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/3.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/4.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/4.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/5.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/5.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/6.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/6.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/7.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/7.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/8.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/8.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/9.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/9.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/10.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/10.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/11.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/11.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/12.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/12.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/13.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/13.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/14.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/14.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/15.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/15.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/16.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/16.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/17.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/17.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/18.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/18.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/19.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/19.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/20.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/20.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/21.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/21.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/22.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/22.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/23.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/23.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/24.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/24.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/25.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/25.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/26.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/26.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/27.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/27.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/28.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/28.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/29.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/29.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/30.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/30.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/31.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/31.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/32.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/32.jpg')}}"></div></a>

                     <a href="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/33.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/simposios/jornadas-neurociencias/33.jpg')}}"></div></a>

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