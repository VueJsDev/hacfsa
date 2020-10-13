@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/circuito-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <!--Cajas Derecha -->
    <?php

$idiomahorario    = trans('body.schedulesmin');
$idiomaprohivido  = trans('body.prohibitedmin');
$idiomaautorizado = trans('body.authorizedmin');
$idiomapuede      = trans('body.You_canmin');
$idiomadebe       = trans('body.You_shouldmin');

?>
    <div class="container">
     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomahorario) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.schedules')}}</h8><hr>
        </div></a>

        <a href="{{ route($idiomaprohivido) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.prohibited')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiomaautorizado) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.authorized')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiomapuede) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.You_can')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiomapuede) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.You_should')}}</h8><hr>
          </div></a>
    </div>

    <!--Cajas Izquierda -->
    <div class="izquierda">
      <h2>{{trans('body.circuit')}}</h2>
        <div class="barra"></div>
          <p>{!!trans('contenbody.info_system')!!}</p>
    </div>
    </div></div>

@endsection
