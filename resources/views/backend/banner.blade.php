@inject('UsersController','App\Http\Controllers\BannerController')

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
					<h3 class="page-title">Banners <small>gestor de banners {{session('message')}}</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-file-image-o"></i>
							<a href="#">Banners</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					@include('backend.partials.frm_admin_banners')
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
					<h4 class="modal-title">Eliminar Banner</h4>
				</div>
				<div class="modal-body">
					 ¿Estas seguro/a de querer eliminar este Banner?
					 <input type="hidden" name="nameBanner" id="nameBanner">
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

@section('scripts')
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
		$('#nameBanner').val($(this).data('name'));
		$('#mdDeleteImage').modal('show');
    });

	$('#btnMdDeleteImg').on('click', function(){
		$.ajax({
			method: "POST",
			url: "{{asset('admin/banner/deletebanner')}}",
			data: { 'name': $('#nameBanner').val(), '_token': '{{ csrf_token() }}' },
			})
			.done(function( data ) {
				if (data == 'ok') {
					window.location ="/admin/banner";
				}
			});
    });
@endsection
