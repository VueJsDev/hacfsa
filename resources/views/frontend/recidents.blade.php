@extends('layouts.frontend.master')


@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/fotos-residencia-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
$idiomaservice = trans('menu.servicesmin');

?>

  <!--Cajas Izquierda -->

<div class="container">
      
      <div class="col-lg-12 clearfix">
  
         <div class="col-md-4 primero clearfix"> 
            <a href="{{ route('teaching') }}"><div class="col-md-2 articulo"><h1>DOCENCIA E INVESTIGACIÓN</h1></div></a>
            <a href="{{route('recidencia')}}"><div class="col-md-2 articulo"><h1>RESIDENCIA</h1></div></a>
         </div>
  
         <div class="segundo col-lg-12 rigth">
            <h2>Fotos / Residencia</h2>
            <div class="barra"></div>
                <div class="container-fluid">
                    <a href="{{route('examen-residentes19')}}"><div class="col-md-2 ateneo">
                    <img src="{{asset('assets/frontend/images/album/residencias/examen2019/portada.jpg')}}">
                    <div class="forma"><h1>Examen a Residentes 2019</h1></div>
                    </div></a>
  
                    <a href="{{route('acto-residentes-mantenimiento')}}"><div class="col-md-2 ateneo">
                    <img src="{{asset('assets/frontend/images/album/residencias/acto-residentes-2018/portada.jpg')}}">
                    <div class="forma"><h1>Acto Residentes - Mantenimiento 2018</h1></div>
                    </div></a>

                    <a href="{{route('residentes-mantenimiento')}}"><div class="col-md-2 ateneo">
                    <img src="{{asset('assets/frontend/images/album/residencias/segundoexamen-2018/portada.jpg')}}">
                    <div class="forma"><h1>Examen a Residentes - Mantenimiento 2018</h1></div>
                    </div></a>

                    <a href="{{route('semana-residentes')}}"><div class="col-md-2 ateneo">
                    <img src="{{asset('assets/frontend/images/album/residencias/semanaResidentes18/portada.jpg')}}">
                    <div class="forma"><h1>Semana de Residentes 2018</h1></div>
                    </div></a>

                    <a href="{{route('examen-recidentes')}}"><div class="col-md-2 ateneo">
                        <img src="{{asset('assets/frontend/images/album/residencias/examen2018/portada.jpg')}}">
                        <div class="forma"><h1>Examen a Residentes 2018</h1></div>
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





