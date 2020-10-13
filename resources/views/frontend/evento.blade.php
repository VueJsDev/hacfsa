@inject('ResidenceController','App\Http\Controllers\ResidenceController')

@extends('layouts.frontend.master')

@section('style_fron')

@endsection
@section('content')
    <!--Slide -->
 @if (session('message_incripcion'))
    @if (session('message_incripcion') == 1)
        <div class="alert alert-success">

            <p style="text-align: center">{{ session('messagein') }}</p>

        </div>
    @else
        <div class="alert alert-danger">

            <p style="text-align: center">{{ session('messagein') }}</p>

        </div>
    @endif
@endif
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/eventos-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

 <!--Eventos -->

<div class="container">
    <div class="cibersalud">
        <h2>EVENTOS</h2>
    </div>

    <div class="cibersalud">
        <h2>PRE-INSCRIPCI&Oacute;NES<br>Residencias 2020</h2> 
        <!-- <h2>XII JORNADAS NEUROCIENCIAS 2019</h2> -->
    </div>

    <!-- <div class="opcion">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Pre-Inscripción Residencias 2020
          </label>
        </div>
       <label >Estas Residencias se incriben por el</label>
        <a style="font-size:20px;" href="https://sisa.msal.gov.ar/sisa/">SISA</a>
        <ul>
            <li>
                Residencia en Medicina Interna
            </li>
            <li>
                Residencia Médica de Cardiología 
            </li>
            <li>
                Residencia de Terapia Intensiva Adultos
            </li>
        </ul>

    </div> -->

    <!--Formulario-->
    <div class="contacto">
        
        <form method="post" name="contacto" action="{{ action('ResidenceController@store') }}" enctype="multipart/form-data" id="contacto">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <label> NOMBRE</label>
        <input type="text" name="nombre" id="nombre" class="form-control @if ($errors->has('nombre')) {{'has-error'}} @endif "  value="{{ Input::old('nombre') }}">
        @if ($errors->has('nombre'))
                    <span class="help-block ">{{ $errors->first('nombre') }}</span>
        @endif
        <label>APELLIDO </label>
        <input type="text" name="apellido" id="apellido" class="form-control @if ($errors->has('apellido')) {{'has-error'}} @endif"  value="{{ Input::old('apellido') }}">
        @if ($errors->has('apellido'))
            <span class="help-block ">{{ $errors->first('apellido') }}</span>
        @endif
        <label for="especialidad">ESPECIALIDAD DE RESIDENCIA</label>
        <br>
            {!!Form::select('especialidad',$residencias,['class'=>'form-control'])!!}
        <br>
        @if ($errors->has('especialidad'))
             <span class="help-block ">{{ $errors->first('especialidad') }}</span>
        @endif
        <label>DNI</label>
        <input type="text" name="nrodoc" id="nrodoc" class="form-control @if ($errors->has('nrodoc')) {{'has-error'}} @endif" value="{{ Input::old('nrodoc') }}">
        @if ($errors->has('nrodoc'))
             <span class="help-block ">{{ $errors->first('nrodoc') }}</span>
        @endif
        <label>DOMICILIO</label>
        <input type="text" name="domicilio" id="domicilio" class="form-control @if ($errors->has('domicilio')) {{'has-error'}} @endif" value="{{ Input::old('domicilio') }}">
        @if ($errors->has('domicilio'))
             <span class="help-block ">{{ $errors->first('domicilio') }}</span>
        @endif
        <label>CIUDAD</label>
        <input type="text" name="localidad" id="localidad" class="form-control @if ($errors->has('localidad')) {{'has-error'}} @endif" value="{{ Input::old('localidad') }}">
        @if ($errors->has('localidad'))
             <span class="help-block ">{{ $errors->first('localidad') }}</span>
        @endif
        <label>Celular</label>
        <input type="text" name="celular" id="celular" class="form-control @if ($errors->has('celular')) {{'has-error'}} @endif" value="{{ Input::old('celular') }}">
        @if ($errors->has('celular'))
             <span class="help-block ">{{ $errors->first('celular') }}</span>
        @endif
        <label>e-mail de Contacto</label>
        <input type="text" name="email" id="email" class="form-control @if ($errors->has('email')) {{'has-error'}} @endif" value="{{ Input::old('email') }}">
        @if ($errors->has('email'))
             <span class="help-block ">{{ $errors->first('email') }}</span>
        @endif
        <div class="g-recaptcha" name="" id="" data-sitekey="6LdMvEAUAAAAAGlmCJLGlK0k-Fx8D8BCN_im1UvG"></div>
        <div style="padding-bottom: 5px" class="form-ip"><button type="submit" class="btn btn-def">ENVIAR</button></div>
        <div > 
            <a href="{{route('inforecidencias')}}" class=" mas-info clearfix">+ INFORMACIÓN DE RESIDENCIAS</a>
        </div>
    </form> 


</div>
            <!--Eventos -->

                 <div class="container evento" >
                    <img src="{{asset('assets/frontend/images/RESIDENCIAS 2020.png')}}" class="img-responsive" alt="Responsive image">
                </div> 



</div>


    <div class="container presentacion" align="center">
        <h6>Para mayor informaci&oacute;n, cont&aacute;ctenos </h6>
    </div>


@endsection

@section('script_ateneos')

    <script src='https://www.google.com/recaptcha/api.js'></script>


@endsection
