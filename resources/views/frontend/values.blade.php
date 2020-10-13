@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/valores-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <!--Cajas Derecha -->

    <?php 
        $idioauto = trans('menu.authoritiesmin');
        $idiomision = trans('body.missionvisionmin');
        $idiomahistoria = trans('body.insthistory');
    ?>
    <div class="container">

     <div class="col-md-3 derecha clearfix">

       	<a href="{{ route($idiomahistoria) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.history')}}</h8>
    	   <hr></div></a>

       	<a href="{{ route($idioauto) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.authorities')}}</h8><hr>
          </div></a>

       	<a href="{{ route($idiomision) }}"><div class="col-xs-2 caja1 texto"><h8> {{trans('body.missionvision')}}</h8><hr>
          </div></a>
    </div>

    <!--Cajas Izquierda -->
    <div class="izquierda">
    	<h2>{{trans('body.values')}}</h2>
        <div class="barra"></div>
    			<p>{!!trans('contenbody.value')!!}</p>
    </div>
    </div></div>
@endsection
