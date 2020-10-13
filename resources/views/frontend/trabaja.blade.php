@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        @include('frontend.carousel')
    </div>

    @include('frontend.inscription')

    <div class="container">
      <div class="cibersalud">
        <h2>{{trans('body.work')}}</h2></div>
        <div class="contacto">
        @if (session('confirm'))
            <div class="alert alert-success" role="alert">
                <strong>{{trans('body.cvsent')}}</strong> {{trans('body.thank')}}
            </div>
        @endif
     	<form method="post" name="contacto" action="{{ action('FrontendController@sendcv') }}" enctype="multipart/form-data" id="contacto">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label>{{trans('body.surname_and_name')}}*</label>
            <input type="text" name="name" id="name" class="form-control" required>
            <label>{{trans('body.emailmin')}}*</label>
            <input type="text" name="email" class="form-control" required>
            <label for="adjuntar archivo">{{trans('body.attach')}}*</label>
            <input type='file' name='file' id='archivo1' placeholder="carga tu CV" required>
            <label>{{trans('body.tmessage')}}</label>
            <input type="text" name="title" id="title" class="form-control">
            <label>{{trans('body.mensagemmin')}}</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            <div class="form-group">
    	      <button type="submit" class="btn btn-def">{{trans('body.submit')}}</button>
    	    </div>
        </form>
      </div>
      </div>
    </div>

@endsection
