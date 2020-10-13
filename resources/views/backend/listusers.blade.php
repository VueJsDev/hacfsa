@inject('UsersController','App\Http\Controllers\UsersController')

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
			<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<form id="frmDeleteUser" action="" method="POST">
							<input type="hidden" name="_method" value="DELETE">
	    					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Eliminar Usuario</h4>
								</div>
								<div class="modal-body">
									 ¿Estas seguro de querer eliminar este usuario?
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

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">Usuarios <small>gestor de usuarios</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-users"></i>
							<a href="#">Usuarios</a>
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
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i> Lista de Usuarios
							</div>
							<div class="actions">

								<a href="users/create" class="btn default blue">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										Nuevo usuario 
									</span>
								</a> 

							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table id="table_users" class="table table-striped table-bordered table-advance table-hover">
									<thead>
										<tr>
											<th class="hidden-xs">
												<i class="fa fa-user"></i> Apellido
											</th>
											<th class="hidden-xs">
												<center>
													<i class="fa fa-user"></i> Nombre
												</center>	
											</th>
											<th>
												<center>
													<i class="fa fa-user"></i> Usuario
												</center>	
											</th>
											<th class="hidden-xs">
												<center>
													<i class="fa fa-envelope"></i> Correo
												</center>	
											</th>
											<th>
												<center>
													<i class="fa fa-key"></i> Perfil
												</center>	
											</th>
											<th>
												<center>
													<i class="fa fa-paper-plane"></i> Acciones
												</center>	
											</th>																						
										</tr>
									</thead>
									<tbody>
										@if (isset($users))
            							<?php $i = 0; ?>
           								@foreach ($users as $user)
	              							<?php
	              									/*var_dump($user);
	              									exit();*/
	              							?>
											<tr> 
												<td class="hidden-xs">
													<center>
														{{$user->last_name}}
													</center>	
												</td>
												<td class="hidden-xs">
													<center>
														{{$user->first_name}}
													</center>	
												</td>
												<td>
													<center>
														{{$user->username}}
													</center>	
												</td>
												<td>
													<center>
														{{$user->email}}
													</center>	
												</td>
												<td>
													<center>
														{{$user->name}}
													</center>	
												</td>		
												<td>
													<center>
														<table>
															<tr>
																<td>
																	<a href="{{asset('admin/users/'.$user->user_id)}}" class="btn btn-sm default purple-stripe">
																		<i class="fa fa-edit"></i>
																		<span class="hidden-480"> Editar </span>
																	</a>															
																</td>
																<td>
																	<a href="#" data-id="{{$user->user_id}}"  class="btn btn-sm default red-stripe btnDeleteUser">
																		<i class="fa fa-trash-o"></i>
																		<span class="hidden-480"> Borrar </span>
																	</a>															
																</td>
															</tr>
														</table>												
													</center>	
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
			<!-- END PAGE CONTENT-->
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

	$('.btnDeleteUser').on('click', function(){
		var user = $(this).data('id');
		$('#frmDeleteUser').attr('action', '{{asset('admin/users')}}/'+user);
		$('#deleteUser').modal('show');
	});
@endsection