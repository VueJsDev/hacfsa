@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/pasantias-01.jpg')}}">
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
          <h2>Pasantías/Rotaciones</h2>
          <div class="barra"></div>
              <p>
              En el marco de brindar oportunidades para la educación médica continua, el Hospital de Alta Complejidad  habilita a realizar rotaciones por los distintos servicios a:<br>
              • Alumnos de Universidades Nacionales<br>
              • Profesionales en formación en un programa de Residencia / Fellowship, o en el marco de la realización de una carrera de Especialista.<br>
              • Profesionales que deseen profundizar sobre alguna práctica específica.<br>
              La misma tiene como objetivo ofrecer una fuerte experiencia clínica, así como una visión del ejercicio de la medicina en nuestro Hospital.<br><br>

              Algunas consideraciones:<br>
              1.• Las rotaciones se autorizan de 1 a 3 meses como máximo. En ciertos casos, podrá considerarse la posibilidad de extensión de dicho período.<br>
              2.• Las rotaciones deben solicitarse con un mínimo de 1 (un) mes de anticipación.<br>
              3.• Los pedidos de rotación deben contar con firma del director o jefe del Departamento de Docencia de origen,  adjuntando  los formularios y documentación pertinente en un solo envío por correo electrónico.<br>
              4.• Se enviará la respuesta por la misma vía con un plazo de hasta 20 días hábiles.<br>
              5.• Los cupos de rotaciones se determinan entre los Jefes de los Servicios Médicos y el Comité de Docencia.<br>
              6.• Se entregan certificados de rotación una vez finalizada la misma y contra presentación de la evaluación correspondiente realizada por el Servicio donde rotó el profesional.

              </p>
              <a href="{{asset('assets/frontend/images/Requisitos-Pasantia.pdf')}}" target="_blank"><div class="col-md-2 condiciones clearfix">Condiciones de Ingreso (Descarga)</div></a>
              </div>
       </div></div>

<div class="container presentacion" align="center">
<h6>Consultas al Dpto. de Docencia e Investigación<br>
Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
MAIL:docenciahacfsa@gmail.com
</div>


@endsection