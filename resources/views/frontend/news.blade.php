@extends('layouts.frontend.master')

@section('facebook')
    <meta property="og:url"           content="{{ asset('es/noticias/' . $lastnews->slug) }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $lastnews->titulo }}" />
    <meta property="og:description"   content="{{ $lastnews->titulo }}" />
    <!--meta property="og:image"         content="{{ asset($imagePath) }}" / -->
@endsection

@section('title')
    <title>HACFSA - {{ $lastnews->titulo }}</title>
@endsection

@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/news-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/noticiar-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/noticias-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')

    <!--Cajas Derecha -->
    <div class="container">
        <div class="segundo">
            <h2>{{ $lastnews->titulo }}</h2>
            <div class="barra"></div>
                    <!--<img src="{{ asset($imagePath) }}">-->
                    <div id="compartir">
                        <div id="fecha"><h10>{{ \Carbon\Carbon::parse($lastnews->fecha_alta)->format('d-m-Y') }}</h10></div>
                        <div id="red">
                            <div id="text"><h10>Compartir</h10></div>
                            <a href="javascript: PopupCenter('https://www.facebook.com/sharer/sharer.php?u='+escape(window.location.href)+'&t='+ document.title, 'Compartir', 600, 300);"><img src="{{asset('assets/frontend/images/fb.png')}}"></a>
                            <a href="javascript: PopupCenter('https://twitter.com/?status={{$lastnews->titulo}} {{ $url }}', 'Compartir', 600, 300);"><img src="{{asset('assets/frontend/images/tw.png')}}"></a>
                        </div>
                    </div>
                    <img src="{{ asset('/assets/frontend/images/noticias/' . $lastnews->urlimagen) }}" class="img-responsive" alt="">
                    <p>{!!$lastnews->cuerpo!!}</p>
        </div>

        <!--Cajas Izquierda -->
         <div class="col-md-3 primero clearfix">
            @foreach ($news as $item)
                <div class="col-xs-2 cuadro txt">
                    <a href="{{ $item->slug }}"><h8>{{ $item->titulo }}</h8>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection



@section('scripts')
    function PopupCenter(url, title, w, h) {
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 2) - (h / 2)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

        // Puts focus on the newWindow
        if (window.focus) {
            newWindow.focus();
        }
    }
@endsection
