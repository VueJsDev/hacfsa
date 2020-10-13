<?php
		use App\Http\Helpers\Helpers;
		//optine el id del rol del usuario
		$rol= Helpers::rolusuario();
?>
@inject('PostulanteController','App\Http\Controllers\PostulanteController')

@extends('layouts.admin.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@endsection

@section('content')
	<div class="page-container">
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- MODAL NUEVO-->
				<div class="modal fade" id="NewResidencias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<form id="FrmNewResidencias" action="" method="POST">
							<input type="hidden" name="_method" value="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">					
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Nueva Residencia</h4>
								</div>
								<div class="modal-body">
									
										<!-- ELIMINAR LA CLASE HAS-ERROR SI NO HAY ERROR AL GUARDAR EL TÍTULO -->
										<div class="form-group @if ($errors->has('id')) {{'has-error'}} @endif">
											<label for="id" class="control-label">id</label>
											<input name="id" type="text" class="form-control" placeholder="id de Residencia" value="{{ Input::old('id') }}">
											@if ($errors->has('id'))
												<span class="help-block">el id es obligatorio.</span>
											@endif	
										</div>
								
										<div class="form-group @if ($errors->has('name')) {{'has-error'}} @endif">
											<label for="name" class="control-label">Nombre</label>
											<input name="name" type="text" class="form-control" placeholder="Nombre de Residencia" value="{{ Input::old('name') }}">
											@if ($errors->has('name'))
												<span class="help-block">el id es obligatorio.</span>
											@endif	
										</div>
								
								</div>
									<div class="modal-footer">
										<button type="submit" class="btn blue"><i class="fa fa-tash-o"></i>Guardar</button>
										<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
									</div>
							</div>
						</form>
					</div>
				</div>
				<!-- FIN MODAL-->
				<!-- MODAL BORRAR-->
				<div class="modal fade" id="deleteResidencias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<form id="FrmDeleteResidencias" action="" method="POST">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">					
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Eliminar Residencia</h4>
								</div>
								<div class="modal-body">
									¿Estas seguro de querer borrar la Residencia?
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn red"><i class="fa fa-tash-o"></i> Eliminar</button>
									<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- FIN MODAL-->

				<!-- AVISOS VARIOS DEL SISTEMA -->
						@if (session('message_type'))
							@if (session('message_type') == $PostulanteController::MESSAGE_SUCCESS)
								<div class="note note-success">
									<p>{{ session('message') }}</p>
								</div>
							@endif
							@if (session('message_type') == $PostulanteController::MESSAGE_NEW)
								<div class="note note-success">
									<p>{{ session('message') }}</p>
								</div>
							@endif
							@if (session('message_type') == $PostulanteController::MESSAGE_DELTER)
								<div class="note note-success">
									<p>{{ session('message') }}</p>
								</div>
							@endif
							@if (session('message_type') == $PostulanteController::MESSAGE_ERROR)
								<div class="note note-danger">
									<p>{{ session('message') }}</p>
								</div>
							@endif	
						@endif
					<div class="portlet-body">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
										<tr>
									<td>id</td>
									<td>Residencias</td>
									<td>
										<a href="#" data-id="" data-toggle="modal" data-target="NewResidenciasResidencias"  class="btn btn-sm default blue-stripe btnNewResidencias">
											<i class="fa fa-plus"></i>
											<span class="hidden-480"> Nueva Residencia </span>
										</a>		
											</td>
											
										</tr>
								</thead>
								<tbody>
									@if($residencias != null)
										@foreach ($residencias as $residencia)
											<tr>
										<td>{{ $residencia[0] }}</td>
										<td>{{ $residencia[1] }}</td>
													<td>
														<a href="#" data-id="{{$residencia[0]}}" data-toggle="modal" data-target="deleteResidencias"  class="btn btn-sm default red-stripe btnDeleteResidencias">
																<i class="fa fa-trash-o"></i>
																<span class="hidden-480"> Borrar </span>
														</a>		
													</td>
											</tr>
										@endforeach
									@endif
								</tbody>
							</table>	
							
						</div>
					</div>
			</div>
		</div>
	</div>
@endsection

@section('plugins')
	<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('assets/admin/pages/scripts/table-managed.js')}}"></script>
@endsection

@section('scripts')
	TableManaged.init();

	$('.btnDeleteResidencias').on('click', function(){
		var idPostulantes = $(this).data('id');
		$('#FrmDeleteResidencias').attr('action', '{{asset('admin/recidencias/frmpostulantes')}}/'+idPostulantes);
		$('#deleteResidencias').modal('show');
	});

	$('.btnNewResidencias').on('click', function(){
		$('#FrmNewResidencias').attr('action', '{{asset('admin/recidencias/newResidences')}}/');
		$('#NewResidencias').modal('show');
	});
@endsection
