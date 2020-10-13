@extends('layouts.frontend.master')

@section('content')
	<!--Slide -->
	<div class="container-fluid">
		@include('frontend.carousel')
	</div>

	@include('frontend.inscription')
	<div class="container presentacion" align="center">
		<h6>{{trans('contenbody.presentation')}}</h6>
	</div>

	<!--Cajas mod-->
	<div class="container">
	 	<div class="cajas" align="center">
		 	<?php
				$idiomausuario     = trans('menu.userlanguage');
				$idioma            = trans('menu.idlanguage');
				$idiomatelesalud   = trans('menu.telehealthmin');
				$idiomatransplante = trans('body.transplantsmin');
			?>

			<a href="{{ route($idiomausuario) }}"><div class="caja2 hvr-grow"><div class="c-1 texto">
						<h8>{{trans('body.latestnews')}}</h8><hr>
					</div></div></a>
			@if($idioma == "es")
			   	<a href="{{route('evento_inscripcion')}}"><div class="caja2 hvr-grow"><div class="c-2 texto">
							<h8>{{trans('body.events')}}</h8><hr>
						</div></div></a>
			@else
				<a href="#"><div class="caja2 hvr-grow"><div class="c-2 texto">
							<h8>{{trans('body.events')}}</h8><hr>
						</div></div></a>
			@endif
			@if($idioma == "es")
			   	<a href="{{route('recidencia')}}"><div class="caja2 hvr-grow"><div class="c-3 texto">
							<h8>{{trans('body.residence')}}</h8><hr>
						</div>
			      </div></a>
			@else
					<a href="{{ route($idiomatelesalud) }}"><div class="caja2 hvr-grow"><div class="c-3 texto">
							<h8>{{trans('body.telehealth')}}</h8><hr>
						</div>
								</div></a>
			@endif

			   	<a href="{{ route($idiomatransplante) }}"><div class="caja2 hvr-grow"><div class="c-4 texto">
						<h8>{{trans('body.transplant')}}</h8><hr>
					</div>
			      </div></a>
	   </div>
	</div>

	
	</div>
	@if($idioma=="es")
		<div class="container">
			<div class="col-md-6 video-index">
				{{-- <iframe width="100%" height="200" src="https://www.youtube.com/embed/lWEmWytJ5sQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
				<iframe width="100%" height="200" src="https://www.youtube.com/embed/EHclh5ilgdE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 video-index">
				<a href="{{asset('assets/frontend/images/ObesidadManual.pdf')}}" download="Manual Informativo para Pacientes">
					<img src="{{asset('assets/frontend/images/Obesidad-banner.jpg')}}" align="center">
				</a>
			</div>
		</div>
			<a href="{{ route('trabaja_con_nosotros') }}"><div class="container work"></div></a>
	@elseif($idioma=="en")
		<a href="{{ route('trabaja_con_nosotros_en') }}"><div class="container enwork"></div></a>
	@else
		<a href="{{ route('trabaja_con_nosotros_pt') }}"><div class="container ptwork"></div></a>
	@endif
	<!--Video-->
	<!-- <div class="previ">
	<h10>{{trans('body.instvideo')}}</h10>
	</div> -->


@endsection
