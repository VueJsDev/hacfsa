@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
      <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/puede-debe-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <?php 
        $idiomacircuito = trans('body.circuitmin');
        $idiomahorario = trans('body.schedulesmin');
        $idiomaautorizado = trans('body.authorizedmin');
        $idiomaprohivido = trans('body.prohibitedmin');

    ?>
    <!--Cajas Derecha -->
    <div class="container">
     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomacircuito) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.circuit')}}</h8><hr>
        </div></a>
        
        <a href="{{ route($idiomahorario) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.schedules')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiomaautorizado) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.authorized')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiomaprohivido) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.prohibited')}}</h8><hr>
          </div></a>

    </div>

    <!--Cajas Izquierda -->
    <div class="izquierda">
    	<h2>{{trans('body.You_can')}}</h2>
        <div class="barra"></div>
    			<p>{!!trans('contenbody.You_can')!!}</p>

    <h2>{{trans('body.You_should')}}</h2>
        <div class="barra"></div>
    			<p>{!!trans('contenbody.You_should')!!}</p>
    </div>
    </div></div></div>
@endsection
