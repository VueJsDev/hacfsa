
@inject('UsersController','App\Http\Controllers\TelesaludController','App\Http\Controllers\InstitucionController')

@extends('layouts.admin.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/dropzone/dropzone.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/gallery/galleryimages.css')}}"/>
@endsection

@section('content')
	
	<div class="page-container">
	<div class="page-content-wrapper">
		<div class="page-content">

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">Secciones <small>gestor de secciones @if (isset($activarseccion)) {{$activarseccion}} @endif</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-file-image-o"></i>
							<a href="#">Secciones</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- sections-->
	<div class="row">
		

				<div class="col-md-12">
					<div class="tabbable tabbable-custom boxless tabbable-reversed">
						<ul class="nav nav-tabs">
							@if (empty(session('activarseccion')))
								<li class="active in">
									<a href="#Institucion" data-toggle="tab">
									Institución </a>
								</li>
							@else
								<li class="@if (session('activarseccion') == 'institucion') {{ 'active in' }} @endif">
									<a href="#Institucion" data-toggle="tab">
									Institución </a>
								</li>
							@endif
							
							<li id="menu_telesalud" class="@if (session('activarseccion') == 'telesalud') {{ 'active in' }} @endif">
								<a href="#Telesalud" data-toggle="tab">
								Telesalud </a>
							</li>
				
						</ul>
						<div class="tab-content">
							
							
							<div class="tab-pane fade @if (session('activarseccion') == 'telesalud' ) {{ 'active in' }} @endif" id="Telesalud">
									<div class="col-md-12">
										@include('backend.partials.frm_admin_sectionstelesalud')
									</div>
							</div>
							
								@if (empty(session('activarseccion')))

									<div class="tab-pane fades active in" id="Institucion">
									
										<div class="col-md-12">
											@include('backend.partials.frm_admin_sectionsinstitucion')
										</div>
									</div>
								@else

									<div class="tab-pane fades @if (session('activarseccion') == 'institucion') {{ 'active in' }} @endif" id="Institucion">
										
											<div class="col-md-12">
												@include('backend.partials.frm_admin_sectionsinstitucion')
											</div>
									</div>
								@endif
						</div>
					</div>
					
				</div>
	</div>
			<!-- BEGIN PAGE CONTENT-->
	
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	</div>

	<!-- MODAL-->
	<div class="modal fade" id="mdDeleteImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4 class="modal-title">Eliminar Imagen</h4>
				</div>
				<div class="modal-body">
					 ¿Estas seguro/a de querer eliminar esta Imagen?
					 <input type="hidden" name="nameSections" id="nameSections">
				</div>
				<div class="modal-footer">
					<button id="btnMdDeleteImg" type="button" class="btn red"><i class="fa fa-trash-o"></i> Eliminar</button>
					<button type="button" class="btn default" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Cancelar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN MODAL-->
@endsection

@section('plugins')
	<script type="text/javascript" src="{{asset('assets/global/plugins/dropzone/dropzone.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/modernizr.custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/toucheffects.js')}}"></script>
@endsection


