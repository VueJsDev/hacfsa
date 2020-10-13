@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.css') }}"/>

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
  
         <a href="{{ route('ateneos-2019') }}"><div class="col-md-2 articulo"><h1>ATENEOS INTERRESIDENCIA 2019</h1></div></a>
  
         <div class="segundo col-lg-12 rigth">
            <h2>Ateneos / Ateneo Mayo 2019</h2>
            <div class="barra"></div>
                <div class="container-fluid">
                  <div class="row">
  
                  <section>

                  @for ($i = 1; $i < 4; $i++)
                      <a href="{{asset('assets/frontend/images/album/ateneos/ateneo-mayo-19/'.$i.'.jpg')}}" data-lightbox="example-1"><div class="col-md-3 thumbnail album"><img src="{{asset('assets/frontend/images/album/ateneos/ateneo-mayo-19/'.$i.'.jpg')}}"></div></a>
                  @endfor
   
                   <section>
  
         </div></div></div>
   
      </div>      
  </div>


@endsection

@section('script_ateneos')

<script src="{{ asset('assets/frontend/js/lightbox-plus-jquery.min.js') }}"></script>


@endsection