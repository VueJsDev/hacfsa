@extends('layouts.frontend.master')

@section('content')
    <?php
      $idiomaservicio = trans('menu.idlanguage');
    ?>
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            @if ($idiomaservicio == "en")
                <img src="{{asset('assets/frontend/images/portadas/banneringles/telehealth-01.jpg')}}">
            @elseif($idiomaservicio == "pt")
                <img src="{{asset('assets/frontend/images/portadas/bannerportuges/telessaude-01.jpg')}}">
            @else
                <img src="{{asset('assets/frontend/images/portadas/telesalud-01.jpg')}}">
            @endif
        </div>
    </div>

    @include('frontend.inscription')

    <!--CiberSalud -->

    <div class="container">
        <div class="cibersalud">
            <h2>{{trans('menu.telehealth')}}</h2>

            @if (isset($imgsecciones))
                    @foreach ($imgsecciones as $llave=>$valor)
                        <div class="item @if ($llave == 0) {{ 'active' }} @endif">
                          <img src="{{ asset('assets/frontend/images/imgsecciones/imgtelesalud/' . $imgsecciones[$llave]['basename']) }}" class="img-responsive" alt="{{ $imgsecciones[$llave]['basename'] }}">
                        </div>
                    @endforeach
            @else
                    {{ 'no hay imagenes' }}
                @endif
        </div>
        <!-- Video -->
        <!--div class="ciber">
            <h3>{{trans('body.whatabout')}}</h3>
        </div-->
        {{-- <div class="rec">
        @if (isset($enlacevideo))
          <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$enlacevideo}}" frameborder="0" allowfullscreen></iframe>
        @else
            {{ 'no hay video' }}
        @endif
        </div> --}}
    </div>

    <div class="container presentacion" align="center">
        <h6>{{trans('body.moreinfo')}}</h6>
    </div>
@endsection
