@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/fellows-01.jpg')}}">
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
          <h2>Fellows</h2>
          <div class="barra"></div>
              <p>
              1- Programa de Fellowship en Ultrasonido<br>
              2- Programa de Fellowship en Cardioangiología Intervencionista<br>
              3- Programa de Fellowship en Cuidados Críticos Cardiovasculares
              </p>
              </div>
       </div></div>

 <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
</div>
@endsection