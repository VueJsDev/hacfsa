@extends('layouts.frontend.master')

@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/contactus-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/contato-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/contacto-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')

    <!--Contacto -->

    <div class="container">
      <div class="cibersalud">
        <h2>{{trans('body.contact')}}</h2></div>
        <div class="contacto">
        @if (session('confirm'))
            <div class="alert alert-success" role="alert">
                <strong>{{trans('body.message_sent')}}</strong> {{trans('body.thanks')}}
            </div>
        @endif
        <form method="post" action="{{ action('FrontendController@sendcontact') }}" name="contacto" id="contacto">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label>{{trans('body.name')}}</label>
            <input type="text" name="name" id="name" class="form-control">
            <label>{{trans('body.email')}}</label>
            <input type="text" name="email" class="form-control">
            <label>{{trans('body.title')}}</label>
            <input type="text" name="title" id="title" class="form-control">
            <label>{{trans('body.mensagem')}}</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            <div class="form-group">
              <button type="submit" class="btn btn-def">{{trans('body.submit')}}</button>
            </div>
        </form>
      </div>
      </div>
    </div>

        <div class="container presentacion" align="center">
            <h6>{!!trans('body.footer')!!}</h6>
        </div>

@endsection
