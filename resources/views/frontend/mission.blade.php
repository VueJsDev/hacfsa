@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/mision-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <?php
$idiomahistoria = trans('body.insthistory');
$idioauto       = trans('menu.authoritiesmin');
$idiovalue      = trans('body.valuesmin');
?>
    <div class="container">


     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomahistoria) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.history')}}</h8>
         <hr></div></a>

        <a href="{{ route($idioauto) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.authorities')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiovalue) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.values')}}</h8><hr>
          </div></a>
    </div>

    <!--Cajas Izquierda -->
    <div class="izquierda">
      <h2>{{trans('body.missionvision')}}</h2>
        <div class="barra"></div>
          <p>{!!trans('contenbody.mission')!!}</p>

    </div></div>
@endsection
