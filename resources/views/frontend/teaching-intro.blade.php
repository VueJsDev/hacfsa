@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/introduccion-01.jpg')}}">
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
          <h2>{{trans('contenbody.education_intro')}}</h2>
          <div class="barra"></div>
          <img src="{{asset('assets/frontend/images/docencia.jpg')}}">
          <!--<img src="img/fondo.jpg">-->
              <p>Misión del Dpto. de Docencia e Investigación<br><br>
              El Dpto. de Docencia e Investigación tiene como misión identificar y satisfacer las expectativas y necesidades de formación tanto de los usuarios internos como externos.
              En el contexto de la misión institucional el departamento de docencia e investigación   facilita procesos de enseñanza –aprendizaje, organiza, crea y gestiona las actividades de: docencia, investigación y extensión que se desarrollan en el HAC.<br><br>

              Visión del Dpto. de Docencia e Investigación<br><br>

              La visión del Dpto. de docencia e investigación del HAC “PTE. JUAN DOMINGO PERON “en el desarrollo de su misión docente es lograr el reconocimiento de la Institución por la comunidad científica, como un Centro Formador de reconocido prestigio nacional e internacional, basado en las competencias profesionales, solidaridad, espíritu de servicio responsable y ética.<br><br>

              Valores del Dpto. de Docencia e Investigación<br><br>

              Para el desarrollo de la misión y alcanzar la visión nos sustentamos en: nuestra experiencia, conocimientos profesionales y tecnológicos, motivación,  afán de superación, capacidad de organización, de aprovechar oportunidades y de trabajo en equipo, equidad y pluralidad.<br><br>

              Objetivos <br><br>

              • Incentivar, promover, organizar y dirigir las actividades de capacitación a todo nivel, en coordinación con los  responsables  de los servicios.<br>
              • Difundir en el Hospital la información sobre becas, congresos, seminarios, etc. para incentivar la participación del personal.<br>
              • Coordinar con los diferentes  Dptos., servicios, áreas, la preparación de publicaciones, material audio-visual y otros medios didácticos del proceso enseñanza-aprendizaje.<br>
              • Llevar un registro actualizado de las actividades de capacitación, asistentes, docentes, temas, horas cátedra dictadas.<br>
              • Supervisar y evaluar los programas de docencia, de investigación científica o administrativa que se llevan a cabo en el hospital.<br>
              • Estudiar y aprobar los protocolos de actividad científica de investigación a ser realizados en el hospital.<br>
              • Dirigir la publicación de los resultados de la actividad científica de investigación que se haya producido en el hospital.<br>
              • Coordinar con las Universidades y Sociedades científicas los programas docentes que se desarrollen en el hospital, en base a los convenios y políticas institucionales existentes.<br>
              • Incorporar el Control de Gestión y la mejora continua en la calidad de atención como capacitación permanente en Servicio.<br><br>

              Integrantes del Departamento:<br>
              > RESPONSABLE: DRA Soledad Nicolas<br>
              > BIQUIMICA MAGISTER: Betina Antueno

                  </p>
              </div>
       </div></div>

    </div>
</div>

<div class="container presentacion" align="center">
<h6>Consultas al Dpto. de Docencia e Investigación<br>
Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
MAIL:docenciahacfsa@gmail.com
</div>
@endsection