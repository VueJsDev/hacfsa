@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
        @include('frontend.carousel')
    </div>

    @include('frontend.inscription')
    <?php
        $idiomaservice = trans('menu.servicesmin');
    ?>

    <div class="container">
        <a href="{{ route($idiomaservice) }}">
            <div class="col-md-3 primero clearfix">
                <div class="col-xs-2 caja3 texto">
                    <h8>{{trans('menu.services')}}</h8>
                </div>
            </div>
        </a>

        <!--Cajas Derecha -->
        <div class="segundo">
            <h2>{{$nombre}}</h2>
            <div class="barra"></div>
            <p>{!!$descripcion!!}</p>
        </div>
    </div>

    <div class="container presentacion" align="center">
        <h6>{{trans('body.moreinfo')}} </h6>
    </div>
@endsection