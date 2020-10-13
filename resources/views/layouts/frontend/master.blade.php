<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	@section('facebook')
		<meta property="og:url"           content="http://www.hacfsa.gob.ar" />
  		<meta property="og:type"          content="website" />
  		<meta property="og:title"         content="HACFSA - Pte. Juan D. Per&oacute;n" />
  		<meta property="og:description"   content="Hospital de Alta Complejidad - Pte. Juan Domingo Per&oacute;n" />
  		<meta property="og:image"         content="{{ asset('assets/frontend/images/hacfsa-facebook.jpg') }}" />
	@show
	@section('title')
		<title>{{trans('menu.hospitalmin')}} "Juan D. Perón"</title>
	@show
	@if ($_SERVER['HTTP_HOST'] != 'localhost:8000')
                <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111691549-1"></script>
		<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());

			  gtag('config', 'UA-111691549-1');
		</script>
    @endif




    <link rel="stylesheet"  href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/estilos.css') }}">
    <link href="{{ asset('assets/frontend/css/hover.css') }}" rel="stylesheet" media="all">

</head>

<body>

@include('layouts.frontend.header')

@yield('style_fron')

@yield('content')


@include('layouts.frontend.footer')

@yield('script_ateneos')


    <script src="{{ asset('assets/frontend/js/jquery-2.1.1.min.js') }}"></script>
  	<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>


	<script>
		var vid = document.getElementById('video');
		$('#btn_verModalVideo').on('click', function(e) {
			e.preventDefault();
			$('#modalVieo').modal('show');
			vid.play();
		});
		$('#btn_cerrarModalVideo').on('click', function(e) {
			e.preventDefault();
			$('#modalVieo').modal('hide');
			vid.pause();
			vid.currentTime = 0;
		});
		$('#btn_cerrarModalVideoEsquina').on('click', function(e) {
			e.preventDefault();
			$('#modalVieo').modal('hide');
			vid.pause();
			vid.currentTime = 0;
		});
		$('.carousel').carousel();
		@section('scripts')
		@show
	</script>

</body>
</html>
