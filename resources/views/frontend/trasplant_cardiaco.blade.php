@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/cardiaco-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <!--Cajas Derecha -->
    <?php
$idiomatransplant = trans('body.transplantsmin');
$idiomarenal      = trans('body.renalmin');
$idiomahepatic    = trans('body.hepaticmin');

?>
    <div class="container">
     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomatransplant) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.transplant')}}</h8><hr></div></a>

        <a href="{{ route($idiomarenal) }}"><div class="col-xs-2 caja1 texto"><h8> {{trans('body.renalcompleto')}}</h8><hr></div></a>

        <a href="{{ route($idiomahepatic) }}"><div class="col-xs-2 caja1 texto"><h8> {{trans('body.hepaticcompleto')}}</h8><hr></div></a>
    </div>
    <!--Cajas Izquierda -->
    <div class="izquierda">
        <h2>{{trans('body.cardiaccompleto')}}</h2>
        <div class="barra"></div>
                <p>{!!trans('contenbody.tcardiac')!!}</p>
    </div>
    </div></div></div>
@endsection
