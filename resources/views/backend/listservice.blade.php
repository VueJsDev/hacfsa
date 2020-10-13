<?php
        use App\Http\Helpers\Helpers;
        //optine el id del rol del usuario
        $rol= Helpers::rolusuario();
?>

@inject('ServiceController','App\Http\Controllers\ServiceController')
@extends('layouts.admin.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/icomoon/style.css')}}"/>
	<!--link para el acordeon-->
	
@endsection

@section('content')
	<div class="page-container">
	<div class="page-content-wrapper">
		<div class="page-content">

			<!-- MODAL-->
			<div class="modal fade" id="deleteService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<form id="FrmDeleteService" action="" method="POST">
						<input type="hidden" name="_method" value="DELETE">
    					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Eliminar Servicio</h4>
							</div>
							<div class="modal-body">
								 ¿Estas seguro de querer borrar este servicio?
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
					<h3 class="page-title">Servicios <small>gestor de servicios</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-list"></i>
							<a href="#">Servicios</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i>Lista de Servicios
							</div>
						
							<div class="actions">
						@if($rol == 1)
								<a id="btnAddDepartment" href="#" class="btn default blue">
									<i class="fa fa-building"></i>
									<span class="hidden-480">
										Gestion Departamentos 
									</span>
								</a>
								<a href="service/create" class="btn default blue">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										Nuevo Servicio 
									</span>
								</a> 
						@else
								<a id="btnTraducDepartment" href="#" class="btn default blue">
									<i class="fa fa-building"></i>
									<span class="hidden-480">
										Gestion Departamentos 
									</span>
								</a>
						@endif
								

							</div>
						</div>
						@if (session('message_typeservice'))
						@if (session('message_typeservice') == $ServiceController::MESSAGE_DELETE)
							<div class="note note-warning">
								<p>{{ session('message') }}</p>
							</div>
						@endif
						@if (session('message_typeservice') == $ServiceController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif	
							
							@foreach ($departamento_servicios as $dpto)
				
									@if(count($dpto['servicios']) != 0)
							
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											  <div class="panel panel-default">
											    <div class="panel-heading" role="tab" id="heading{{ $dpto->id }}">
											      <h4 class="panel-title">
											        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $dpto->id }}" aria-expanded="true">
											          <i class="fa fa-building"></i> Departamento de {{ $dpto->nombre }}
											        </a>
											      </h4>
											    </div>
											    <div id="collapse{{ $dpto->id }}" class="panel-collapse collapse" role="tabpanel" >
											      <div class="panel-body">
											      @if($rol==1)
											      	<table class="table table-striped table-hover">
											      @else
											      	<table class="table  table-hover">
											      @endif
								                            <thead>
								                                <tr>
					
								                                    <th class="col-md-10"><i class="fa fa-group"></i> Servicios</th>
								                                    <th class="col-md-2 center " style="text-align: center" ><i class="fa fa-paper-plane"></i> Acciones</th>

								                                </tr>
								                            </thead>
								                            <tbody>
								                            	@foreach ($dpto['servicios'] as $servicio)
									                            	@if($rol==1)
							                                            <tr>
							                                       	@elseif($rol==3)
							                                       		<tr @if ($servicio->ennombre == NULL) style="background-color:#F9D67C" @endif>
							                                       	@else 
							                                       		<tr @if ($servicio->ptnombre == NULL) style="background-color:#F9D67C" @endif>
							                                       	@endif
									                                    <td>{{$servicio->nombre}}</td>
									                                    
									                                    @if ($rol == 1)
									                                    	<td>
										                                    	<a href="{{url('admin/service/'. $servicio->id.'/edit')}}" class="btn btn-sm default purple-stripe">
			                                                                        <i class="fa fa-edit"></i>
			                                                                        <span class="hidden-480"> Editar </span>
		                                                                    	</a>
										                                    	<a href="#" data-id="{{$servicio->id}}" data-toggle="modal" data-target="deleteService"  class="btn btn-sm default red-stripe btnDeleteService">
		                                                                        <i class="fa fa-trash-o"></i>
		                                                                        <span class="hidden-480"> Borrar </span>
		                                                                    	</a>
	                                                                    @else
	                                                                    	<td style="text-align: center" >
		                                                                    	<a href="{{url('admin/service/'. $servicio->id.'/edit')}}" class="btn btn-sm default purple-stripe " style="text-align: center">
			                                                                        <i class="fa fa-edit"></i>
			                                                                        @if ($rol == 3)
				                                                                        @if ($servicio->ennombre == NULL)
				                                                                        	<span class="hidden-480"> Traducir </span>
				                                                                        @else
				                                                                        	<span class="hidden-480"> Editar </span>
				                                                                        @endif
				                                                                    @else
				                                                                    	@if ($servicio->ptnombre == NULL)
				                                                                        	<span class="hidden-480"> Traducir </span>
				                                                                        @else
				                                                                        	<span class="hidden-480"> Editar </span>
				                                                                        @endif
				                                                                    @endif
		                                                                    	</a>
	                                                                    @endif	
									                                    </td>
									                                   
									                                </tr>
	                                                        	@endforeach   
								                            </tbody>
								                        </table>
	    
											      </div>
											    </div>
											  </div>
										</div>
									@endif
							
								
							@endforeach
																	
					</div>
				</div>
			</div>
		</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>

	<!-- MODAL-->
			<div class="modal fade" id="modal_newDepartment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					
    										
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Gestion de Departamentos</h4>
							</div>
							<div class="modal-body">
								<div id="alertasucces" class="alert alert-success" style="display:none">
									<strong>Excelente!</strong> nuevo departamento guardado.
								</div>
								<div id="alertdelete" class="note note-warning" style="display:none">
									<strong>Eliminado!</strong> departamento eliminado correctamente.
								</div>
								<div id="alerterror" class="note note-danger" style="display:none">
									<strong>Error!</strong> el departamento tiene servicios asociados.
								</div>
								<form id="FrmNewDepartment" action="admin/department" method="POST">	
									<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
									<div class="row">
										<div class="col-md-9">
											<input name="nameDepartment" id="nameDepartment" type="text" class="form-control" placeholder="Nombre del Departamento">
										</div>
										<div class="col-md-3">
											<button type="submit" class="btn blue form-control"><i class="fa fa-plus"></i> Agregar</button>
										</div>
									</div>	
								 </form><br>
								<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Lista de Departamentos</h3>
									</div>
									
									<table class="table" id="listado_de_departamentos">
									<thead>
									<tr>
										<th class="col-md-10">
											 Nombre
										</th>
									
										<th class="text-center col-md-1">
											 Acción
										</th>
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>
								</div>								 
							</div>
							<div class="modal-footer">
								<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					
				</div>
			</div>
			<!-- FIN MODAL-->
			<!-- MODAL-->
			<div class="modal fade" id="modal_traducDepartment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					
    										
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Traducción de Departamentos</h4>
							</div>
							<div class="modal-body">
								<div id="alertok" class="alert alert-success" style="display:none">
									<strong>Excelente!</strong> el departamento se a traducido.
								</div>
								<div id="alervacio" class="note note-danger" style="display:none">
									<strong>Error!</strong> Por favor cargue una traducción.
								</div>
								<div id="alerterror" class="note note-danger" style="display:none">
									<strong>Error!</strong> el departamento tiene servicios asociados.
								</div>
								<form id="FrmNewDepartment" action="admin/department" method="POST">	
									<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
									<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">Lista de Departamentos</h3>
									</div>
									
									<table class="table" id="traduccion_de_departamentos">
									<thead>
									<tr>
										<th class="col-md-4">
											 Nombre
										</th>
										<th class="text-center col-md-2">
											 Traducir
										</th>
										<th class="text-center col-md-6">
											 Traducción
										</th>
										<th class="text-center col-md-2">
											 Guardar
										</th>
								
									</tr>
									</thead>
									<tbody>
									</tbody>
									</table>
								</div>								 
							</div>
								</form><br>
								
							<div class="modal-footer">
								<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					
				</div>
			</div>
			<!-- FIN MODAL-->
@endsection

@section('plugins')
	<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('assets/admin/pages/scripts/table-managed.js')}}"></script>
@endsection

@section('scripts')
@if($rol == 1)
	TableManaged.init();
	cargadeDeptos();

	function cargadeDeptos()
	{
		$.ajax({
				type: "get",
				url: 'department',
				data: {'_token': $('#_token').val()},
				contentType: "application/x-www-form-urlencoded",
				success: function(responseData, textStatus, jqXHR) {
					for(var i in responseData){
						$('#listado_de_departamentos tbody:last-child').append("<tr id='tr_" + responseData[i].id + "'><td>" + responseData[i].nombre + "</td><td  class='text-center'><button type='button' data-id='"+responseData[i].id +"' class='btn btn-xs red btnEliminarDpto'><i class='fa fa-trash-o'></i></button></td></tr>");
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					$('#alertdelete').hide();
					$('#alertasucces').hide();
					$('#alerterror').show();

				}
			})
	}

	$('.btnDeleteService').on('click', function(){
		var idservice = $(this).data('id');
		$('#FrmDeleteService').attr('action', '{{asset('admin/service')}}/'+idservice);
		$('#deleteService').modal('show');
		$('#alerterror').hide();
	});

	$('.btnEliminarDpto').live('click', function(){
		var idDpto = $(this).data('id');
		$.ajax({
				type: "DELETE",
				url: 'department/' + idDpto,
				data: {'_token': $('#_token').val()},
				contentType: "application/x-www-form-urlencoded",
				success: function(responseData, textStatus, jqXHR) {
					$('#tr_'+idDpto).remove();
					$('#alertdelete').show();
					$('#alertasucces').hide();
					$('#alerterror').hide();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					if (jqXHR.status == 500)
					{
						$('#alertdelete').hide();
						$('#alertasucces').hide();
						$('#alerterror').show();
					}
				}
			})
	});

	$('#btnAddDepartment').on('click', function(e) {
		e.preventDefault();
		$('#modal_newDepartment').modal('show');
	});

	$("#modal_newDepartment").submit(function(e) {
		e.preventDefault();
    	var url = 'department';

  		if ( !$("#nameDepartment").val() ) 
		{
    		$("#modal_newDepartment").addClass('has-error');
			$('#alertasucces').hide();
			$('#alerterror').hide();
			return;
  		}
		else
		{
    		$("#modal_newDepartment").removeClass('has-error');
			var posting = { name: $('#nameDepartment').val(), _token: $('#_token').val() };
			

			$.ajax({
				type: "post",
				url: url,
				data: posting,
				contentType: "application/x-www-form-urlencoded",
				success: function(responseData, textStatus, jqXHR) {
					console.log(responseData);
					$('#alertasucces').show();
					$('#alerterror').hide();
					$('#alertdelete').hide();
					$("#nameDepartment").val('');
					$("#nameDepartment").focus();
					$('#listado_de_departamentos tbody:last-child').append("<tr id='tr_" + responseData.depto.id + "'><td>" + responseData.depto.nombre + "</td><td  class='text-center'><button type='button' data-id='"+responseData.depto.id +"' class='btn btn-xs red btnEliminarDpto'><i class='fa fa-trash-o'></i></button></td></tr>");
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			})			  

		}
	});


@else 



	TableManaged.init();
	cargadeDeptos();

	function cargadeDeptos()
	{
		$.ajax({
				type: "get",
				url: 'department',
				data: {'_token': $('#_token').val()},
				contentType: "application/x-www-form-urlencoded",
				success: function(responseData, textStatus, jqXHR) {
					for(var i in responseData){
					@if($rol==3)
						var txttraducido = responseData[i].endepto;
					@else
						var txttraducido = responseData[i].ptdepto;
					@endif

						var idtraducido  = responseData[i].id;
						console.log(idtraducido);
							$('#traduccion_de_departamentos tbody:last-child').append("<tr id='tr_" + responseData[i].id + "'><td>" + responseData[i].nombre + "</td><td  class='text-center'><button id='edit"+responseData[i].id +"' type='button' data-id='"+responseData[i].id +"' class='btn btn-xs blue btnEditDpto deshabilitado'><i class='fa fa-edit'></i></button><td><input name='traducido"+responseData[i].id +"' id='traducido"+responseData[i].id +"' type='text' class='form-control escondido' value= '@if ($rol == 3)" + responseData[i].endepto + " @else " + responseData[i].ptdepto + " @endif' placeholder='Traducir'></td><td  class='text-center'><button id='save"+responseData[i].id +"' type='button' data-id='"+responseData[i].id +"' class='btn btn-xs blue btnTraducirDpto'><i class='fa fa-save'></i></button></td></td></tr>");
						@if($rol==3)
							if ( responseData[i].endepto == null ){
						@else
							if ( responseData[i].ptdepto == null ){
						@endif
						
							$('#traducido'+idtraducido).hide();
							$('#save'+idtraducido).hide();
						}else{
							$('#traducido'+idtraducido).show();
							$('#save'+idtraducido).show();
						}
					}
				
					
					
				
				
				
				},
				error: function(jqXHR, textStatus, errorThrown) {
					$('#alertdelete').hide();
					$('#alertasucces').hide();
					$('#alerterror').show();

				}
			})
	}

	$('#btnTraducDepartment').on('click', function(e) {
		e.preventDefault();
		$('#modal_traducDepartment').modal('show');
	});

	$('.btnEditDpto').live('click', function() {
		var idDpto = $(this).data('id');
		$('#save'+idDpto).attr("disabled", false);
		$('.deshabilitado').attr("disabled", true);
		console.log(idDpto);
		$('#traducido'+idDpto).show();
		$('#save'+idDpto).show();
		$('#edit'+idDpto).hide();
		

		

	});

	$('.btnTraducirDpto').live('click', function() {
		var idDpto = $(this).data('id');
		var txtTraducido = $('#traducido'+idDpto).val();
		
		if ( !$('#traducido'+idDpto).val() ) 
		{
				$('#alervacio').show();
				$('#alertasucces').hide();
				$('#alerterror').hide();
				$('#alertok').hide();
				return;
			
  		}
  		else
		{

			$.ajax({
					type: "put",
					url: 'department/'+ idDpto,
					data: {_token: $('#_token').val(),texto: txtTraducido},
					contentType: "application/x-www-form-urlencoded",
					success: function(responseData, textStatus, jqXHR) {
					console.log(responseData);
						if(responseData="ok"){
							$('#alertok').show();
							$('#alerterror').hide();
							$('#alertdelete').hide();
							$('#alervacio').hide();
							$('#save'+idDpto).show();
							$('#edit'+idDpto).show();
							$('#traducido'+idDpto).show();
							$('.deshabilitado').attr("disabled", false);
						}
						
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(errorThrown);
					}
				})
		}

	});

	$("#modal_traducDepartment").submit(function(e) {
		e.preventDefault();
    	var url = 'department';

  		if ( !$("#nameDepartment").val() ) 
		{
    		$("#modal_traducDepartment").addClass('has-error');
			$('#alertasucces').hide();
			$('#alerterror').hide();
			return;
  		}
		else
		{
    		$("#modal_traducDepartment").removeClass('has-error');
			var posting = { name: $('#nameDepartment').val(), _token: $('#_token').val() };
			

			$.ajax({
				type: "post",
				url: url,
				data: posting,
				contentType: "application/x-www-form-urlencoded",
				success: function(responseData, textStatus, jqXHR) {
					console.log(responseData);
					$('#alertasucces').show();
					$('#alerterror').hide();
					$('#alertdelete').hide();
					$("#nameDepartment").val('');
					$("#nameDepartment").focus();
					$('#traduccion_de_departamentos tbody:last-child').append("<tr id='tr_" + responseData[i].id + "'><td>" + responseData[i].nombre + "</td><td><input name='traducido"+responseData[i].id +"' id='traducido"+responseData[i].id +"' type='text' class='form-control btnTraducirDpto' placeholder='Traducir'></td><td  class='text-center'><button type='button' data-id='"+responseData[i].id +"' class='btn btn-xs blue btnTraducirDpto'><i class='fa fa-save'></i></button></td></tr>");
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(errorThrown);
				}
			})			  

		}
	});
@endif
@endsection
