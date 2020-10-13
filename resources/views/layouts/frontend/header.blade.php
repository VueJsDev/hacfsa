
	<div class="contenedor-fluido">

		@if (isset($pathslogo))
                    @foreach ($pathslogo as $llave=>$valor)
                        <div class="logo @if ($llave == 0) {{ 'active' }} @endif">
                          <a href="{{ route('home') }}"><img src="{{ asset('assets/frontend/images/imgsecciones/' . $pathslogo[$llave]['basename']) }}" class="img-responsive" alt="{{ $pathslogo[$llave]['basename'] }}" width="200" height="100"></a>
                        </div>
                    @endforeach
                @else
                    {{ 'no hay imagenes' }}
        @endif
		<div class="hac">
			<h9>{{trans('menu.hospital')}}</h9><br>
			<h10>"PTE. JUAN DOMINGO PERÓN"</h10>
		</div>

		<div id="header" class="menu">
			<?php
$idiomausuario = trans('menu.userlanguage');
$idiomainst    = trans('menu.institutionmin');
$idioservice   = trans('menu.servicemin');
$idiotele      = trans('menu.telehealthmin');
$idiohome      = trans('menu.homemin');
$idiocontact   = trans('menu.contactmin');
$idiodocencia  = trans('menu.teachingmin');
$idioinfop     = trans('body.patient_informationmin');
$idiomasitio   = trans('menu.idlanguage');

?>
			<div class="seccion">
				<a @if ($titulopagina == 'inicio') class="subrayarEnlace" @endif href="{{ route($idiohome) }}">{{trans('menu.home')}}</a>
				<a @if ($titulopagina == 'institucion') class="subrayarEnlace" @endif href="{{ route($idiomainst) }}">{{trans('menu.institution')}}</a>
				<a @if ($titulopagina == 'noticias') class="subrayarEnlace" @endif href="{{ route($idiomausuario) }}">{{trans('menu.news')}}</a>
				<a @if ($titulopagina == 'servicios') class="subrayarEnlace" @endif href="{{ route($idioservice) }}">{{trans('menu.services')}}</a>
				<a @if ($titulopagina == 'cibersalud') class="subrayarEnlace" @endif href="{{ route($idiotele) }}">{{trans('menu.telehealth')}}</a>
				
					<a @if ($titulopagina == 'informacion_al_paciente') class="subrayarEnlace" @endif href="{{ route($idioinfop) }}">
						{{trans('menu.information')}}
				    </a>
				
			@if($idiomasitio == "es")
				
					<a @if ($titulopagina == 'docencia') class="subrayarEnlace" @endif href="{{ route($idiodocencia)}}">
						{{trans('menu.teaching')}}
					</a>
				
			@endif


				<a @if ($titulopagina == 'contacto') class="subrayarEnlace" @endif href="{{ route($idiocontact) }}">{{trans('menu.contact')}}</a>
				<!--<a @if ($titulopagina == 'ingles') class="subrayarEnlace" @endif href="{{ url('en') }}">Ingles</a>
				<a @if ($titulopagina == 'portugues') class="subrayarEnlace" @endif href="{{ url('pt') }}">Portugues</a>
				<a @if ($titulopagina == 'español') class="subrayarEnlace" @endif href="{{ url('es') }}">Español</a>-->

			</div>
		</div>
		<div class="box" align="center">
			<div class="idioma">
				<div class="español"><a href="/es"><h5>ES</h5></a></div>
				<div class="portugues"><a href="/pt"><h5>PO</h5></a></div>
				<div class="ingles"><a href="/en"><h5>EN</h5></div>
			</div>
		</div>

		<!--Menu Minwidth-->
			<div class="boton btn-group" align="center">
			  <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown"> Menu <span class="caret"></span>
			  </button>

			  <ul class="dropdown-menu">
			    <h1>{{trans('menu.home')}} <br></h1>
			    <a href="{{ route($idiomainst) }}">{{trans('menu.institution')}}<br></a>
			     <a  href="{{ route($idiomausuario) }}">{{trans('menu.news')}} <br></a>
			     <a  href="{{ route($idioservice) }}">{{trans('menu.services')}}<br></a>
				 <a href="{{ route($idiotele) }}"><h7>{{trans('menu.telehealth')}}</h7><br></a>
				 <a  href="{{ route('patient_information') }}" class="btn btn-ip">
					    <h8>{{trans('menu.information')}}</h8>
				 </a><br>
				 <a href="{{ route('teaching')}}"><h7>{{trans('menu.teaching')}}</h7><br></a>
				 <a  href="{{ route($idiocontact) }}">{{trans('menu.contact')}}<br></a>
				 <h7>{{trans('menu.language')}}<br></h7>
				 <a href="{{ url('en') }}">Ingles<br></a>
				 <a href="{{ url('pt') }}">Portugues<br></a>
			     <a href="{{ url('es') }}">Español<br></a>
			  </ul>

			</div>
	</div>

