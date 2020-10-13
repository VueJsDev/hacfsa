@inject('NewsController','App\Http\Controllers\NewsController')

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
					<h3 class="page-title">Publicaciones <small>nueva publicación</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-list"></i>
							<a href="{{asset('admin/news')}}">Publicaciones</a>
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
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- AVISOS VARIOS DEL SISTEMA -->
					@if (session('message_type'))
						@if (session('message_type') == $NewsController::MESSAGE_SUCCESS)
							<div class="note note-success">
								<p>{{ session('message') }}</p>
							</div>
						@endif
						@if (session('message_type') == $NewsController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif	
					<!-- FIN DE AVISOS -->
					<form action="{{ asset('admin/news') }}" enctype="multipart/form-data" method="POST" role="form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-pencil-square-o"></i>Nueva publicación
								</div>
								<div class="actions">

									<button type="submit" class="btn default green">
										<i class="fa fa-floppy-o"></i>
										<span class="hidden-480">
											Guardar 
										</span>
									</button>
									<a href="{{ asset('admin/news') }}" class="btn default dark">
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
										<div class="form-group @if ($errors->has('title')) {{'has-error'}} @endif">
											<label for="title" class="control-label">Título</label>
											<input name="title" type="text" class="form-control" placeholder="título de la publicación" value="{{ Input::old('title') }}">
											@if ($errors->has('title'))
												<span class="help-block">el título es obligatorio.</span>
											@endif	
										</div>										
										<div class="form-group">
											<label for="title" class="control-label">Tipo de Publicacion</label>
                                            <select class="form-control" name="tipopublicacion">
                                                <option> Seleccionar</option>
	                                            @foreach ($publicaciones as $publicacion)
	                                                <option selected value="{{$publicacion['id']}}">
	                                                    {{ $publicacion['descripcion'] }}
	                                                </option>
	                                            @endforeach
                                            </select>
										</div>	

										<div class="input-group">
										  <div class="input-group-prepend">
										    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
										  </div>
										  <div class="custom-file">
										    <input type="file" class="custom-file-input" id="inputGroupFile01"
										      aria-describedby="inputGroupFileAddon01" name="file">
										    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
										  </div>
										</div>

										<div class="form-group @if ($errors->has('news')) {{'has-error'}} @endif">
											<label for="news" class="control-label">Cuerpo</label>
											<textarea class="form-control ckeditor" name="news" rows="15">{{ Input::old('news') }}</textarea>
											@if ($errors->has('news'))
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

