<!--Slide -->
<!--div class="container-fluid"-->
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
         
      <div class="carousel-inner" role="listbox">
        @if (isset($paths))
            @foreach ($paths as $llave=>$valor)
                <div class="item @if ($llave == 0) {{ 'active' }} @endif">
                    <img src="{{ asset('assets/frontend/images/banners/' . $paths[$llave]['basename']) }}" class="img-responsive" alt="{{ $paths[$llave]['basename'] }}">
                </div>
            @endforeach
        @else
            {{ 'no hay imagenes' }}width="853" height="480" 1920
        @endif

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
<!--/div-->
<!--End Slide -->