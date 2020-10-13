@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.css') }}"/>
@endsection
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
         <a href="{{route('recidencia')}}"><div class="col-md-2 articulo"><h1>RESIDENCIA</h1></div></a>
         <a href="{{route('recidentes')}}"><div class="col-md-2 residentes"><h1>FOTOS DE RESIDENCIA</h1></div></a>
        </div>

         <div class="segundo col-lg-12 rigth">
          <h2>Examen / Residentes 2019 - Segundo Llamado</h2>
           <div class="barra"></div>
              <div class="container-fluid">
                <div class="row">
                  
                  <section>
                    @for ($i = 1; $i < 14; $i++)
                            <a href="{{asset('assets/frontend/images/album/residencias/examen2019/'.$i.'.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/residencias/examen2019/'.$i.'.jpg')}}"></div></a>
               
                    @endfor

                  </section>

       </div></div></div>
   
      </div>      
  </div>

<div class="container presentacion" align="center">
  <h6>Consultas al Dpto. de Docencia e Investigación<br>
  Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
  MAIL:docenciahacfsa@gmail.com
</div>
@endsection

@section('script_ateneos')



<script src="{{ asset('assets/frontend/js/lightbox-plus-jquery.min.js') }}"></script>

@endsection





