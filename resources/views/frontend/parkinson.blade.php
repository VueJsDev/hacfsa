@extends('layouts.frontend.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/parkinson-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    @if (session('message_incripcion'))
        @if (session('message_incripcion') == 2)
            <div class="alert alert-danger">

                <p style="text-align: center">{{ session('messagein') }}</p>

            </div>
        @endif
    @endif

    <!--Contacto -->

    <div class="container">
      <div class="cibersalud">
        <h2>{{trans('body.contact')}} {{trans('menu.parkinsonmayus')}}</h2></div>
        <div class="contactoParkinson">
            <div class="col-md-5">
                <img src="{{asset('assets/frontend/images/BannersParkinso2.jpg')}}">
            </div>
            <div class="col-md-7">
                @if (session('confirm'))
                <div class="alert alert-success" role="alert">
                    <strong>{{trans('body.message_sent')}}</strong> {{trans('body.thanks')}}
                </div>
                @endif
                <form method="post" action="{{ action('FrontendController@sendparkinson') }}" name="contacto" id="contacto">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <label>{{trans('body.name')}}</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label>{{trans('body.email')}}</label>
                    <input type="text" name="email" class="form-control">
                    <label>{{trans('body.title')}}</label>
                    <input type="text" name="title" id="title" class="form-control">
                    <label>{{trans('body.mensagem')}}</label>
                    <textarea name="message" id="message" cols="30" rows="15" class="form-control"></textarea>
                    <div class="form-group">
                        <div class="g-recaptcha" name="recapcha" id="recapcha" data-sitekey="6LdMvEAUAAAAAGlmCJLGlK0k-Fx8D8BCN_im1UvG"></div>
                        <button type="submit" class="btn btn-def">{{trans('body.submit')}}</button>
                    </div>
                </form>
            </div>
      </div>
      </div>
    </div>

        <div class="container presentacion" align="center">
            <h6>{!!trans('body.footer')!!}</h6>
        </div>

@endsection

@section('script_ateneos')

    <script src='https://www.google.com/recaptcha/api.js'></script>


@endsection
