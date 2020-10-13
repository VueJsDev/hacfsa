<?php
		use App\Http\Helpers\Helpers;
		//optine el id del rol del usuario
		$rol= Helpers::rolusuario();
?>
@inject('NewsController','App\Http\Controllers\NewsController')

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
							@if($rol == 2 or $rol==3)
								<a href="#">Traducción</a>
							@else
								<a href="#">Edición</a>
							@endif
						</li>						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="tabbable-line">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#publi" data-toggle="tab">
								Publicación </a>
							</li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="publi">
								@include('backend.partials.frm_edit_publication', ['tipopublicaciones' => $tipopublicaciones, 'publication' => $publication])
							</div>
						</div>
					</div>					
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
					<h4 class="modal-title">Eliminar Imágen</h4>
				</div>
				<div class="modal-body">
					 ¿Estas seguro de querer eliminar esta imágen?
					 <input type="hidden" name="idimg" id="idhiddenimg">
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
	<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/dropzone/dropzone.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/modernizr.custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/gallery/toucheffects.js')}}"></script>
@endsection

@section('scripts')

	$('#state').select2();

	//SCRIPT DROPZONE
		Dropzone.options.myDropzone = {
			autoProcessQueue: false,
			uploadMultiple: true,
			maxFilesize: 10, //MB
			maxFiles: 2,
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
				$.ajax({
					method: "GET",
					url: "{{asset('admin/images/imagespublication')}}",
					data: { id: "{{$publication['id']}}"},
					beforeSend: function(){
						$('.grid').empty().append('<center><img src="{{asset('assets/admin/layout/img/loading.gif')}}" alt=""><center>');
					}
				})
				.done(function( data ) {
					$('.grid').empty();
					$.each( data, function( key, value ) {
					  	$('.grid').append("<li id='element"+value.id+"'><figure><img src='{!! asset('uploads/thumbs/') !!}/"+ value.descripcion + "' ><figcaption><a class='btn red btnDeleteImage' data-id='" + value.id + "' href='#'><i class='fa fa-trash-o'></i> Eliminar</a></figcaption></figure></li>");						  
					});
				});				
			}
		}
    //FIN DROPZONE

    $('.btnDeleteImage').live('click', function(e){
    	e.preventDefault();
		$('#idhiddenimg').val($(this).data('id'));
		$('#mdDeleteImage').modal('show');
    });

    $('#btnMdDeleteImg').on('click', function(){
		$.ajax({
			method: "POST",
			url: "{{asset('admin/images/deleteimgpublic')}}",
			data: { 'id': $('#idhiddenimg').val(), '_token': '{{ csrf_token() }}' },
			})
			.done(function( data ) {
				$('#mdDeleteImage').modal('hide');
				$('#element'+data).remove();
			});		
    });	
@endsection
