@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/renal-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <!--Cajas Derecha -->
    <?php
$idiomatransplant = trans('body.transplantsmin');
$idiomahepatic    = trans('body.hepaticmin');
$idiomacardiac    = trans('body.cardiacmin');
$idioma           = trans('menu.idlanguage');
?>
    <div class="container">
     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomatransplant) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.transplant')}}</h8><hr></div></a>

        <a href="{{ route($idiomahepatic) }}"><div class="col-xs-2 caja1 texto"><h8> {{trans('body.hepaticcompleto')}} </h8><hr></div></a>

        <a href="{{ route($idiomacardiac) }}"><div class="col-xs-2 caja1 texto"><h8> {{trans('body.cardiaccompleto')}} </h8><hr></div></a>

    </div>

    <!--Cajas Izquierda -->
    <div class="izquierda">
        <h2> {{trans('body.renalcompleto')}}</h2>
        <div class="barra"></div>
                <p>{!!trans('contenbody.trenal')!!}</p>
    </div>
    </div></div></div>
@endsection
