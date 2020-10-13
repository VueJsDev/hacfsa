@inject('UsersController','App\Http\Controllers\LogoController')

@extends('layouts.admin.master')

@section('style')
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
					<h3 class="page-title">Logo <small>gestor de Logo {{session('message')}}</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-file-image-o"></i>
							<a href="#">Logo</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					@include('backend.partials.frm_admin_logo')
				</div>
			</div>
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
					<h4 class="modal-title">Eliminar Logo</h4>
				</div>
				<div class="modal-body">
					 ¿Estas seguro/a de querer eliminar este Logo?
					 <input type="hidden" name="nameLogo" id="nameLogo">
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

@section('scriptslogo')
		Dropzone.options.myDropzone = {
			autoProcessQueue: false,
			uploadMultiple: true,
			maxFilesize: 10, //MB
			maxFiles: 3,
			previewsContainer: "#previews",
			params: {
					 token: '{{ csrf_token() }}'
				  },
			init: function() {
				var submitButton = document.querySelector('#submit-all');
				myDropzone = this;

				submitButton.addEventListener('click', function(e){
					e.preventDefault();
					e.stopPropagation();
					myDropzone.processQueue();
				});

				this.on('addedfile', function(file){
					//alert('agregó un archivo');
				});

				this.on('complete', function(file){
					myDropzone.removeFile(file);
				});

			},
			success: function(data) {
				if (data.accepted) {
					$('#mensaje_afirmativo').show();
					$('#mensaje_error').hide();
					setTimeout(function(){ location.reload(); }, 3000);
				} else {
					$('#mensaje_afirmativo').hide();
					$('#mensaje_error').show();
				}
			}
		}
	//FIN DROPZONE
	$('.btnDeleteImage').live('click', function(e){
    	e.preventDefault();
		$('#nameLogo').val($(this).data('name'));
		$('#mdDeleteImage').modal('show');
    });

	$('#btnMdDeleteImg').on('click', function(){
		$.ajax({
			method: "POST",
			url: "{{asset('admin/logo/deletelogo')}}",
			data: { 'name': $('#nameLogo').val(), '_token': '{{ csrf_token() }}' },
			})
			.done(function( data ) {
				if (data == 'ok') {
					window.location ="/admin/logo";
				}
			});
    });
@endsection
