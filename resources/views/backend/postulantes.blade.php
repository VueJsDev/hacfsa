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

			<!-- MODAL-->
			<div class="modal fade" id="deletePostulantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<form id="FrmDeletePostulantes" action="" method="POST">
						<input type="hidden" name="_method" value="DELETE">
    					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Eliminar Postulante</h4>
							</div>
							<div class="modal-body">
								 ¿Estas seguro de querer borrar al postulante?
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
						@if (session('message_type') == $PostulanteController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif

            <table class="table table-striped">
                  <thead>
                        <tr>
                              <td>Nombre</td>
                              <td>Apellido</td>
                              <td>Especialidad</td>
                              <td>DNI</td>
                              <td>Domicilio</td>
                              <td>Ciudad</td>
                              <td>Celular</td>
                              <td>Email</td>
                              <td>Acciones</td>
                        </tr>
                  </thead>
                  <tbody>
                        @foreach ($postulantes as $postulante)
                              <tr>
                                    <td>{{ $postulante->nombre }}</td>
                                    <td>{{ $postulante->apellido }}</td>
                                    <td>{{ $postulante->residencia->especialidad }}</td>
                                    <td>{{ $postulante->numerodocumento }}</td>
                                    <td>{{ $postulante->domicilio }}</td>
                                    <td>{{ $postulante->localidad }}</td>
                                    <td>{{ $postulante->celular }}</td>
                                    <td>{{ $postulante->email }}</td>
                                    <td>
                                          <a href="#" data-id="{{$postulante->id}}" data-toggle="modal" data-target="deletePostulantes"  class="btn btn-sm default red-stripe btnDeletePostulantes">
                                                <i class="fa fa-trash-o"></i>
                                                <span class="hidden-480"> Borrar </span>
                                          </a>		
                                    </td>
                              </tr>
                        @endforeach
                  </tbody>
            </table>	
			
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

	$('.btnDeletePostulantes').on('click', function(){
		var idPostulantes = $(this).data('id');
		$('#FrmDeletePostulantes').attr('action', '{{asset('admin/recidencias/postulantes')}}/'+idPostulantes);
		$('#deletePostulantes').modal('show');
	});
@endsection
