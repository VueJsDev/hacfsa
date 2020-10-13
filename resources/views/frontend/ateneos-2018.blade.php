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

       <a href="{{route('ateneos')}}"><div class="col-md-2 articulo"><h1>ATENEOS INTERDISIPLINARIOS</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Ateneos Interresidencias 2018</h2>
          <div class="barra"></div>
              <div class="container-fluid">

                 <a href="{{route('ateneo-septiembre2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-septiembre-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>SEPTIEMBRE 2018</h1></div></div></a>

                 <a href="{{route('ateneo_agosto_2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-agosto-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>AGOSTO 2018</h1></div></div></a>

                 <a href="{{route('ateneo-julio2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-julio-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>JULIO 2018</h1></div></div></a>

                 <a href="{{route('ateneo-radiologico18')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-radiologico-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>Radiológico 2018</h1></div></div></a>

                 <a href="{{route('uti_2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-uti-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo<br>UTI 2018</h1></div></div></a>

                 <a href="{{route('ateneosneuro_2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-neurocirugia-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo Neurocirugía 2018</h1></div></div></a>

                 <a href="{{route('ateneoscardio_2018')}}"><div class="col-md-3 ateneo">
                 <img src="{{asset('assets/frontend/images/album/ateneos/ateneo-cardiologia-18/portada.jpg')}}">
                 <div class="forma"><h1>Ateneo Cardiología 2018</h1></div></div></a>

       </div></div>
 
    </div>      
</div>



 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection