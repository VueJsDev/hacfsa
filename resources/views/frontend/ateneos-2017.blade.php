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
            <h2>Ateneos Interresidencias 2017</h2>
            <div class="barra"></div>
                <div class="container-fluid"> 
                   <a href="{{route('interresidencias')}}">
                    <div class="col-md-3 ateneo">
                        <img src="{{asset('assets/frontend/images/album/ateneos/ateneointer/portada.jpg')}}">
                        <div class="forma"><h1>Ateneo Terapia Intensiva 2017</h1></div>
                    </div>
                    </a>

                    <a href="{{route('neurocirugia')}}">
                    <div class="col-md-3 ateneo">
                        <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-neurocirugia/portada.jpg')}}">
                        <div class="forma"><h1>Ateneo Neurocirugía 2017</h1></div>
                    </div>
                    </a>

                    <a href="{{route('neurologia')}}">
                        <div class="col-md-3 ateneo">
                            <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-neurologia/portada.jpg')}}">
                            <div class="forma"><h1>Ateneo Neurología 2017</h1></div>
                        </div>
                    </a>
  
         </div></div>
   
      </div>      
  </div>

 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection