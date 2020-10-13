@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/autoridades-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
    <?php
        $idiomahistoria = trans('body.insthistory');
        $idioauto       = trans('menu.authoritiesmin');
        $idiomision     = trans('body.missionvisionmin');
        $idiovalue      = trans('body.valuesmin');
    ?>
    <!--Cajas Derecha -->
    <div class="container">

     <div class="col-md-3 derecha clearfix">

        <a href="{{ route($idiomahistoria) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.history')}}</h8><hr>
        </div></a>

        <a href="{{ route($idiomision) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.missionvision')}}</h8><hr>
          </div></a>

        <a href="{{ route($idiovalue) }}"><div class="col-xs-2 caja1 texto"><h8>{{trans('body.values')}}</h8><hr>
          </div></a>
    </div>

    
    <!--Cajas Izquierda -->
    <div class="izquierda">
        <h2>AUTORIDADES</h2>
        <div class="barra"></div>
        
            <div class="container autoridades">
                <div class="col-lg-12">
                <div class="row">
                    <!--class "foto" <img src="img/prochasko.jpg">-->
                    <div class="admin">  
                        <h3>ADMINISTRADOR GENERAL</h3>
                        <h4>Dr. Marcelo Prochasko</h4>
                    </div>
                </div>
            </div>

        </div>

        <div class="container autoridades">
            <div class="row">
                <div class="col-sm-4">
                    <!--class "foto" <img src="img/Gutierrez.jpg">-->    
                    <div class="admin">
                        <h3>DIRECTOR ASOCIADO</h3>
                        <h4>Dr. Santiago Nicolas Urday</h4>
                    </div>
                </div>
        
                <div class="col-sm-4">
                    <!--class "foto" <img src="img/avila.jpg">-->    
                    <div class="admin">
                        <h3>DIRECTOR ASOCIADO</h3>
                        <h4>Dra. Paula Ramirez</h4>
                    </div>
                </div>

                <div class="col-sm-4">
                    <!--class "foto" <img src="img/avila.jpg">-->    
                    <div class="admin">
                        <h3>DIRECTOR ASOCIADO</h3>
                        <h4>CPN. Carolina González</h4>
                    </div>
                </div>  
            </div>
        </div> 
    </div>
    </div>


</div>
@endsection
