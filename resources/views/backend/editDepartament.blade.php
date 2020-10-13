
@inject('UsersController','App\Http\Controllers\DepartmentController','App\Http\Controllers\HeaderDepartmentController')

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
					<h3 class="page-title">Departamentos <small>gestor de departamentos @if (isset($activarseccion)) {{$activarseccion}} @endif</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-file-image-o"></i>
							<a href="#">Departamentos</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- AVISOS VARIOS DEL SISTEMA -->
			
			<!-- sections-->
	<div class="row">
				<div class="col-md-12">
					<div class="tabbable tabbable-custom boxless tabbable-reversed">
						<ul class="nav nav-tabs">
							@if (empty(session('activarseccion')))
								<li class="active in">
									<a href="#Departamento" data-toggle="tab">
									Departamentos </a>
								</li>
							@else
								<li class="@if (session('activarseccion') == 'departamento') {{ 'active in' }} @endif">
									<a href="#Institucion" data-toggle="tab">
									Departamentos </a>
								</li>
							@endif
							<li id="menu_cabecera" class="@if (session('activarseccion') == 'cabecera') {{ 'active in' }} @endif">
								<a href="#Cabecera" data-toggle="tab">
								Cabeceras </a>
							</li>
						</ul>
						<div class="tab-content">
							
							
							<div class="tab-pane fade @if (session('activarseccion') == 'cabecera' ) {{ 'active in' }} @endif" id="Cabecera">
									<div class="col-md-12">
									@include('backend.partials.frm_admin_service_headerdepartament')
									</div>
							</div>
							
								@if (empty(session('activarseccion')))

									<div class="tab-pane fades active in" id="Departamento">
									
										<div class="col-md-12">
											@include('backend.partials.frm_admin_service_departament')
										</div>
									</div>
								@else

									<div class="tab-pane fades @if (session('activarseccion') == 'departamento') {{ 'active in' }} @endif" id="Departamento">
										
											<div class="col-md-12">
												@include('backend.partials.frm_admin_service_departament')
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

	
@endsection

@section('plugins')
	<script type="text/javascript" src="{{asset('assets/global/plugins/dropzone/dropzone.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/modernizr.custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/toucheffects.js')}}"></script>
@endsection


