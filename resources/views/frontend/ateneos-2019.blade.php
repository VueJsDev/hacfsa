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
  
         <a href="{{route('ateneos')}}"><div class="col-md-2 articulo"><h1>ATENEOS INTERDISCIPLINARIOS</h1></div></a>
  
         <div class="segundo col-lg-12 rigth">
            <h2>Ateneos Interresidencias 2019</h2>
            <div class="barra"></div>
                <div class="container-fluid">

                <a href="{{route('ateneo-octubre19')}}">
                    <div class="col-md-3 ateneo">
                        <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-octubre-19/portada.jpg')}}">
                        <div class="forma"><h1>Ateneo<br>OCTUBRE 2019</h1></div>
                    </div>
                </a>


                <a href="{{route('ateneo-julio19')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-julio-19/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>JULIO 2019</h1></div></div></a>

                <a href="{{route('ateneo-junio19')}}"><div class="col-md-3 ateneo">
                    <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-junio-19/portada.jpg')}}">
                    <div class="forma"><h1>Ateneo<br>JUNIO 2019</h1></div></div>
                </a>
                     <a href="{{route('ateneo-mayo19')}}"><div class="col-md-3 ateneo">
                   <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-mayo-19/portada.jpg')}}">
                   <div class="forma"><h1>Ateneo<br>MAYO 2019</h1></div></div></a>
  
                     <a href="{{route('ateneo-abril19')}}"><div class="col-md-3 ateneo">
                   <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-abril-19/portada.jpg')}}">
                   <div class="forma"><h1>Ateneo<br>ABRIL 2019</h1></div></div></a>
  
                   <a href="{{route('ateneo-marzo19')}}"><div class="col-md-3 ateneo">
                   <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-marzo-19/portada.jpg')}}">
                   <div class="forma"><h1>Ateneo<br>MARZO 2019</h1></div></div></a>
                   <!--<a href="#"><div class="col-md-2 ateneo"><h1>Ateneo</h1></div></a>-->  
  
         </div></div>
   
      </div>      
  </div>

 


 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection