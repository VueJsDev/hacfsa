<?php
use App\Http\Helpers\Helpers;
use Cartalyst\Sentinel\Native\Facades\Sentinel;

$user = Sentinel::getUser()->toArray();
//optine el id del rol del usuario
$rol = Helpers::rolusuario();

?>
<div class="page-header navbar navbar-fixed-top">
	<!-- HEADER INNER -->
	<div class="page-header-inner">
		<!-- LOGO -->
		<div class="page-logo">
			<a href="#">
			<img src="{{asset('assets/admin/layout/img/Hac-panel-25.png')}}" alt="logo" class="logo-default"/>
			</a>
		</div>
		<!-- FIN LOGO -->
		<!-- MENU HOTIZONTAL -->
		<div class="hor-menu hor-menu-light hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<li @if ( $menu == 'news' ) class="active" @endif>
					<a href="{{asset('admin/news')}}">
					Publicaciones @if ( $menu == 'news' ) <span class='selected'></span> @endif
					</a>
				</li>
				@if ($rol == 1)
					<li @if ( $menu == 'logo' ) class="active" @endif>
						<a href="{{asset('admin/logo')}}">
							Logo @if ( $menu == 'logo' ) <span class='selected'></span> @endif
						</a>
					</li>
				@endif
				<li @if ( $menu == 'banner' ) class="active" @endif>
					<a href="{{asset('admin/banner')}}">
						Portada @if ( $menu == 'banner' ) <span class='selected'></span> @endif
					</a>
				</li>
				@if ($rol == 1)
					<li @if ( $menu == 'users' ) class="active" @endif>
						<a href="{{asset('admin/users')}}">
						Usuarios @if ( $menu == 'users' ) <span class='selected'></span> @endif
						</a>
					</li>
				@endif
				<li @if ( $menu == 'service' ) class="active" @endif>
					<a href="{{asset('admin/service')}}">
					Servicios @if ( $menu == 'service' ) <span class='selected'></span> @endif
					</a>
				</li>
				<li @if ( $menu == 'sections' ) class="active" @endif>
					<a href="{{asset('admin/sections')}}">
					+ Secciones @if ( $menu == 'sections' ) <span class='selected'></span> @endif
					</a>
				</li>
				<li @if ( $menu == 'postulantes' ) class="active" @endif>
					<a href="{{asset('admin/residencias/postulantes')}}">
					Pre-Inscripcion @if ( $menu == 'postulantes' ) <span class='selected'></span> @endif
					</a>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default">
					7 </span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<p>
								 Tienes 7 notificaciones
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. <span class="time">
									Just now </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. <span class="time">
									15 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. <span class="time">
									22 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. <span class="time">
									40 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. <span class="time">
									2 hrs </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									2 user IP blocked. <span class="time">
									5 hrs </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Storage Server #4 not responding. <span class="time">
									45 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. <span class="time">
									55 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. <span class="time">
									2 hrs </span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">
							<a href="#">
							See all notifications <i class="m-icon-swapright"></i>
							</a>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="{{asset('assets/admin/layout/img/avatar3_small.jpg')}}"/>
					<span class="username">{{ $user['username'] }}</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#">
							<i class="icon-user"></i> Mi Perfil </a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="#">
							<i class="icon-lock"></i> Bloquear Pantalla </a>
						</li>
						<li>
							<a href="{{url('auth/logout')}}">
							<i class="icon-key"></i> Salir </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
