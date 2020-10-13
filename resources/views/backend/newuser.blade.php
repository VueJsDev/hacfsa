@inject('UsersController','App\Http\Controllers\UsersController')

@extends('layouts.admin.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
@endsection

@section('content')
	<div class="page-container">
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-md-12">
					<!-- COMIENZO TÍTULO & BREADCRUMB-->
					<h3 class="page-title">Usuario <small>nuevo usuario</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-list"></i>
							<a href="{{asset('admin/users')}}">Usuarios</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-pencil-square-o"></i>
							<a href="#">Nuevo</a>
						</li>						
					</ul>
					<!-- FIN TÍTULO & BREADCRUMB-->
				</div>
			</div>
			<!-- FIN HEADER-->
			<!-- COMIENZO CONTENIDO-->
			<div class="row">
				<div class="col-md-12">
					<!-- AVISOS VARIOS DEL SISTEMA -->
					@if (session('message_type'))
						@if (session('message_type') == $UsersController::MESSAGE_SUCCESS)
							<div class="note note-success">
								<p>{{ session('message') }}</p>
							</div>
						@endif
						@if (session('message_type') == $UsersController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif	
					<!-- FIN DE AVISOS -->				
					<form action="{{ asset('admin/users') }}" method="POST" role="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-pencil-square-o"></i> Nuevo usuario
								</div>
								<div class="actions">

									<button type="submit" class="btn default green">
										<i class="fa fa-floppy-o"></i>
										<span class="hidden-480">
											Guardar 
										</span>
									</button>
									<a href="{{ asset('admin/users') }}" class="btn default dark">
										<i class="fa fa-list-ul"></i>
										<span class="hidden-480">
											Listado 
										</span>
									</a>									 

								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
									<!-- ELIMINAR LA CLASE HAS-ERROR PARA EL CASO NORMAL -->
									<div class="col-md-7">
										<div class="form-group @if ($errors->has('apellido')) {{'has-error'}} @endif">
											<label for="lastname" class="control-label">Apellido</label>
											<input name="lastname" id="lastname" type="text" class="form-control" placeholder="apellido" value="{{ Input::old('lastname') }}">
											@if ($errors->has('apellido'))
												<span class="help-block">{{ $errors->first('apellido') }}</span>
											@endif
										</div>
										<div class="form-group @if ($errors->has('nombre')) {{'has-error'}} @endif">
											<label for="name" class="control-label">Nombre</label>
											<input name="name" id="name" type="text" class="form-control" placeholder="nombre/s" value="{{ Input::old('name') }}">
											@if ($errors->has('nombre'))
												<span class="help-block">{{ $errors->first('nombre') }}</span>
											@endif
										</div>
										<div class="form-group @if ($errors->has('usuario')) {{'has-error'}} @endif">
											<label for="user" class="control-label">Usuario</label>
											<input name="user" id="user" type="text" class="form-control" placeholder="usuario" value="{{ Input::old('user') }}">
											@if ($errors->has('usuario'))
												<span class="help-block">{{ $errors->first('usuario') }}</span>
											@endif
										</div>
										<div class="form-group @if ($errors->has('email')) {{'has-error'}} @endif">
											<label for="email" class="control-label">Correo</label>
											<input name="email" id="email" type="email" class="form-control" value="{{ Input::old('email') }}" placeholder="correo@correo.com">
											@if ($errors->has('email'))
												<span class="help-block">{{ $errors->first('email') }}</span>
											@endif
										</div>
										<div class="form-group @if ($errors->has('password')) {{'has-error'}} @endif">
											<label for="pass" class="control-label">Contraseña</label>
											<input name="pass" id="pass" type="password" class="form-control" placeholder="********">
											@if ($errors->has('password'))
												<span class="help-block">{{ $errors->first('password') }}</span>
											@endif
										</div>
										<div class="form-group">
											<label for="perfil">Perfil</label>
											<select name="perfil" id="perfil" class="form-control">
												<option value="0">Seleccionar</option>
												@foreach ($roles as $role)
													<option value="{{ $role->id }}" @if ( Input::old('perfil') == $role->id ) {{ 'selected' }} @endif >{{ $role->name }}</option>
												@endforeach
											</select>
										</div>				
									</div>
								</div>								
							</div>
						</div>
					</form>
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	</div>
@endsection

@section('plugins')
	<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
@endsection

@section('scripts')
	
@endsection