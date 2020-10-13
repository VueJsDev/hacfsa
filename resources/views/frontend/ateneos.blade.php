@extends('layouts.frontend.master')

@section('style_fron')


@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/ateneos-01.jpg')}}">
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
          <h2>Ateneos Interdisciplinarios</h2>
          <div class="barra"></div>
              <div class="container-fluid">
                <div class="container-fluid">
                    <a href="{{ route('ateneos-2019')}}">
                        <div class="col-md-3 ateneo">
                          <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-marzo-19/portada.jpg') }}">
                          <div class="forma"><h1>Ateneo Interresidencias 2019</h1></div>
                        </div>
                    </a>

                    <a href="{{ route('ateneos_multidisciplinario') }}"><div class="col-md-3 ateneo">
                    <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-multidisciplinario-18/portada.jpg')}}">
                    <div class="forma"><h1>Ateneo Clínico Multidisciplinario MAYO/2018</h1></div></div></a>

                    <a href="{{ route('ateneos_2018') }}"><div class="col-md-3 ateneo">
                    <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-cardiologia-18/portada.jpg')}}">
                    <div class="forma"><h1>Ateneo Interresidencias 2018</h1></div></div></a>

                    <a href="{{ route('ateneos_2017') }}"><div class="col-md-3 ateneo">
                    <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-terapia/portada.jpg')}}">
                    <div class="forma"><h1>Ateneo Interresidencias 2017</h1></div></div></a>
                </div>

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