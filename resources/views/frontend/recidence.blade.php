@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/residencia-01.jpg')}}">
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
       <a href="{{route('inforecidencias')}}"><div class="col-md-2 mas"><h1>+ INFORMACIÓN DE RESIDENCIAS</h1></div></a>
       <a href="{{route('recidentes')}}"><div class="col-md-2 residentes"><h1>FOTOS DE RESIDENCIA</h1></div></a>
       <!--<div class="col-md-2 articulo"><h1>FOTOS DE RESIDENCIAS</h1></div>-->
    </div>
      <div class="segundo col-lg-12">
          <h2>Residencias</h2>
          <div class="barra"></div>
              <p>El Hospital de Alta Complejidad Pte. Juan Domingo Perón, con el aval del Ministerio de Desarrollo Humano de la provincia, brinda formación de posgrado a través del sistema de residencias ofreciendo una adecuada capacitación a través de actividades programadas y supervisadas por profesionales con formación académica y experiencia en las diferentes especialidades, contando con la infraestructura necesaria para dar cumplimiento a los diferentes programas.<br><br>

              El sistema de residencias médicas constituye la base de la educación médica de posgrado y es el procedimiento idóneo que permite la transición del estudiante graduado a ser médico general o especializado.
              </p>
          <img src="{{asset('assets/frontend/images/RESIDENCIAS 2020.png')}}">
          <a href="{{route('evento_inscripcion')}}"><div class="col-md-2 resi clearfix">Pre-Inscripción a Residencia</div></a>
          <a href="{{asset('assets/frontend/images/Condiciones-Residencias.pdf')}}" target="_blank"><div class="col-md-2 condiciones clearfix">Condiciones de Ingreso (Descarga)</div></a>
          <a href="{{asset('assets/frontend/images/DeclaracionJuradaResidencia.doc')}}"><div class="col-md-2 condiciones clearfix">Formulario/DECLARACIÓN JURADA RESIDENCIAS</div></a>
          <a href="{{asset('assets/frontend/images/NotaSolicitudResidencia.doc')}}"><div class="col-md-2 condiciones clearfix">Formulario/NOTA ADMINISTRADOR RESIDENCIAS</div></a>
      </div>
    </div>
</div>


<div class="container presentacion" align="center">
  <h6>Consultas al Dpto. de Docencia e Investigación<br>
  Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
  MAIL:docenciahacfsa@gmail.com
</div>
@endsection





