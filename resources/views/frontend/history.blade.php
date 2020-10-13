@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/historia-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
    <?php
$idioauto   = trans('menu.authoritiesmin');
$idiomision = trans('body.missionvisionmin');
$idiovalue  = trans('body.valuesmin');
?>

    <div class="container">


        <div class="col-md-3 derecha clearfix">

            <a href="{{ route($idioauto) }}">
                <div class="col-xs-2 caja1 texto">
                    <h8>{{trans('body.authorities')}}</h8>
                    <hr>
                </div>
            </a>

            <a href="{{ route($idiomision) }}">
                <div class="col-xs-2 caja1 texto">
                    <h8>{{trans('body.missionvision')}}</h8>
                    <hr>
                </div>
            </a>

            <a href="{{ route($idiovalue) }}">
                <div class="col-xs-2 caja1 texto">
                    <h8>{{trans('body.values')}}</h8>
                    <hr>
                </div>
            </a>
        </div>

        <!--Cajas Izquierda -->
        <div class="izquierda">
            <h2>{{trans('body.history')}}</h2>
            <div class="barra"></div>
            <p>{!!$contenidohistoria!!}</p>
        </div>
    </div>
@endsection
