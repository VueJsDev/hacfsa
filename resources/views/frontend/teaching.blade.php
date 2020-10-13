@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/docencia-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <div class="container">
        <div class="servicios">
            <h2>DOCENCIA E INVESTIGACIÓN</h2>
            <div class="linea"></div>
        </div>
    </div>
    <?php
$idioma         = trans('menu.idlanguage');
$idiomadocencia = trans('body.teaching_intro');

?>
    <div class="container">

        <div class="col-lg-12 clearfix">

           <a href="{{ route($idiomadocencia) }}"><div class="col-md-2 articulo"><h1>{{trans('body.intro')}}</h1></div></a>

           <a href="{{route('recidencia')}}"><div class="col-md-2 articulo"><h1>Residencias</h1></div></a>

           <a href="{{ route('fellows') }}"><div class="col-md-2 articulo"><h1>Fellows</h1></div></a>

           <a href="{{ route('rotations') }}"><div class="col-md-2 articulo"><h1>Pasantías/Rotaciones</h1></div></a>

           <a href="{{ route('ateneos') }}"><div class="col-md-2 articulo"><h1>Ateneos Interdisciplinarios</h1></div></a>

           <a href="{{ route('capacitacion') }}"><div class="col-md-2 articulo"><h1>Jornada y Simposio de Capacitación</h1></div></a>

           <a href="{{ route('cientifico') }}"><div class="col-md-2 articulo"><h1>Publicaciones y Trabajos Científicos</h1></div></a>

           <a href="{{ route('comites') }}"><div class="col-md-2 articulo"><h1>Comités</h1></div></a>

           <a href="{{ route('actividad-docencia') }}"><div class="col-md-2 articulo"><h1>Actividades Docencia</h1></div></a>

           <a href="{{ route('biblioteca') }}"><div class="col-md-2 articulo"><h1>Biblioteca</h1></div></a>

        </div>
    </div>

    <div class="container presentacion" align="center">
        <h6>Consultas al Dpto. de Docencia e Investigación<br>
        Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
        MAIL:docenciahacfsa@gmail.com
    </div>

   <!-- <div class="container">
        <div class="col-lg-12 clearfix">
            <!--a href="residencias.html">
                <div class="col-md-2 articulo">
                    <img src="{{ asset('assets/frontend/images/Residencias.png') }}">
                </div>
            </a
        </div>

        <div class="col-lg-12 clearfix">
            @if($idioma =="es")
                <img src="{{ asset('assets/frontend/images/residencias2017.jpg') }}">
            @elseif($idioma == "en")
                <img src="{{ asset('assets/frontend/images/9.jpg') }}">
            @else
                <img src="{{ asset('assets/frontend/images/8.jpg') }}">
            @endif
        </div>-->
        <!--a target="_blank" href="{{ asset('assets/frontend/images/Condiciones-Residencia.pdf') }}">
            <div class="col-md-2 residencia">
                <img src="{{ asset('assets/frontend/images/condiciones.png') }}">
            </div>
        </a
    </div> -->

@endsection
