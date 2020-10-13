@inject('ServiceController','App\Http\Controllers\ServiceController')

@extends('layouts.admin.master')

@section('ckeditor')
        <script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/ckeditor/ckfinder/ckfinder.js')}}" type="text/javascript"></script>
@endsection


@section('content')
	<div class="page-container">
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">Servicios <small>nueva servicio</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-list"></i>
							<a href="{{asset('admin/service')}}">Servicios</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-pencil-square-o"></i>
							<a href="#">Nueva</a>
						</li>						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- AVISOS VARIOS DEL SISTEMA -->
					@if (session('message_typeservice'))
						@if (session('message_typeservice') == $ServiceController::MESSAGE_SUCCESS)
							<div class="note note-success">
								<p>{{ session('message') }}</p>
							</div>
						@endif
						@if (session('message_typeservice') == $ServiceController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif	
					<!-- FIN DE AVISOS -->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form action="{{ asset('admin/service') }}" method="POST" role="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-pencil-square-o"></i>Nuevo servicio
								</div>
								<div class="actions">
									<button type="submit" class="btn default green">
										<i class="fa fa-floppy-o"></i>
										<span class="hidden-480">
											Guardar 
										</span>
									</button>
									<a href="{{ asset('admin/service') }}" class="btn default dark">
										<i class="fa fa-list-ul"></i>
										<span class="hidden-480">
											Listado 
										</span>
									</a>									 

								</div>
							</div>
							<div class="portlet-body form">
								<div class="form-body">
									<div class="col-md-9">
										<!-- ELIMINAR LA CLASE HAS-ERROR SI NO HAY ERROR AL GUARDAR EL TÍTULO -->
										<div class="form-group @if ($errors->has('nombreservicio')) {{'has-error'}} @endif">
											<label for="nombreservicio" class="control-label">Nombre del Servicio</label>
											<input name="nombreservicio" type="text" class="form-control" placeholder="Nombre del Servicio" value="{{ Input::old('nombreservicio') }}">
											@if ($errors->has('nombreservicio'))
												<span class="help-block">el título es obligatorio.</span>
											@endif	
										</div>										
										<div class="form-group">
											<label for="departamentos" class="control-label">Departamento</label>
                                            <select class="form-control" name="departamentos">
                                                @foreach ($departamentos as $departamento)
                                                <option selected value="{{$departamento['id']}}">{{$departamento['nombre']}}</option>
	                                            @endforeach
                                            </select>
										</div>										
										<div class="form-group @if ($errors->has('contenidoservicio')) {{'has-error'}} @endif">
											<label for="contenidoservicio" class="control-label">Cuerpo</label>
											<textarea class="form-control ckeditor" name="contenidoservicio" rows="15">{{ Input::old('contenidoservicio') }}</textarea>
											@if ($errors->has('contenidoservicio'))
												<span class="help-block">el cuerpo es obligatorio.</span>
											@endif	
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

