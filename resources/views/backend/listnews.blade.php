<?php
		use App\Http\Helpers\Helpers;
		//optine el id del rol del usuario
		$rol= Helpers::rolusuario();
?>
@inject('NewsController','App\Http\Controllers\NewsController')

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
			<div class="modal fade" id="deleteNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<form id="FrmDeleteNews" action="" method="POST">
						<input type="hidden" name="_method" value="DELETE">
    					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Eliminar Publicación</h4>
							</div>
							<div class="modal-body">
								 ¿Estas seguro de querer borrar esta publicación?
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
					<h3 class="page-title">Publicaciones <small>gestor de publicaciones</small></h3>
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="{{asset('admin/news')}}">Inicio</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<i class="fa fa-list"></i>
							<a href="#">Publicaciones</a>
						</li>
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- AVISOS VARIOS DEL SISTEMA -->
					@if (session('message_type'))
						@if (session('message_type') == $NewsController::MESSAGE_TRADUCIR)
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
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list"></i>Lista de Publicaciones
							</div>
						 @if($rol==1)
							<div class="actions">

								<a href="news/create" class="btn default blue">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										Nueva publicación 
									</span>
								</a> 

							</div>
						@endif
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table id="table_noticias" class="table table-condensed table-hover">
									<thead>
										<tr>
											<th>
												<i class="fa fa-info"></i> Título
											</th>
											<th class="hidden-xs">
												<center>
													<i class="fa fa-user"></i> Autor
												</center>	
											</th>
											<th class="hidden-xs">
												<center>
													<i class="fa fa-calendar"></i> Fecha
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
                                        <!-- aca arranca el loop -->
                                    @foreach ($news as $noticia)
                                        @if($rol==1)
                                            <tr @if ((bool)$noticia->publicar === false) class="danger" @endif>
                                       	@elseif($rol==3)
                                       		<tr @if ($noticia->ten != 1) style="background-color:#F9D67C" @endif>
                                       	@else 
                                       		<tr @if ($noticia->tpt != 1) style="background-color:#F9D67C" @endif>
                                       	@endif
                                                <td>
                                                    <h4 class="text-primary"> {{ $noticia->titulo }} </h4>
                                                    <p></p>
                                                </td>
                                                <td class="hidden-xs" style="vertical-align:middle">
                                                    <center>
                                                        {{ $noticia->usuario_alta }}	
                                                    </center>	
                                                </td>
                                                <td class="hidden-xs" style="vertical-align:middle">
                                                    <center>
                                                        {{ $noticia->fecha_alta }}	
                                                    </center>	
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <center>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                    <a href="{{url('admin/news/'. $noticia->id.'/edit')}}" class="btn btn-sm default purple-stripe">
                                                                        <i class="fa fa-edit"></i>
                                                                        @if($rol==2)
                                                                        	@if($noticia->tpt !=1)
                                                                        		<span class="hidden-480"> Traducir </span>
                                                                        	@else
                                                                        		<span class="hidden-480"> Editar </span>
                                                                        	@endif
                                                                        @elseif($rol==3)
                                                                        	@if($noticia->ten !=1)
                                                                        		<span class="hidden-480"> Traducir </span>
                                                                        	@else
                                                                        		<span class="hidden-480"> Editar </span>
                                                                        	@endif
                                                                        @else
                                                 								<span class="hidden-480"> Editar </span>
                                                                        @endif
                                                                    </a>															
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('/'.$noticia->idioma.'/noticias/'.$noticia->slug) }}" target="_blank" class="btn btn-sm default blue-stripe">
                                                                        <i class="fa fa-eye"></i>
                                                                        <span class="hidden-480"> Ver </span>
                                                                    </a>
                                                                </td>
                                                                @if($rol==1 )
	                                                                <td>
	                                                                    <a href="#" data-id="{{$noticia->id}}" data-toggle="modal" data-target="deleteNews"  class="btn btn-sm default red-stripe btnDeleteNews">
	                                                                        <i class="fa fa-trash-o"></i>
	                                                                        <span class="hidden-480"> Borrar </span>
	                                                                    </a>															
	                                                                </td>
                                                                @endif
                                                            </tr>
                                                        </table>												
                                                    </center>	
                                                </td>
                                            </tr>
                                    @endforeach
										<!--<tr>
											<td>
												<h4 class="text-primary">asasasasas sas asasa asasas</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eaque atque quo sit, eveniet repellat dolore beatae minus aliquam autem fugit voluptas dolorem...</p>
											</td>
											<td class="hidden-xs" style="vertical-align:middle">
												<center>
													Claudia
												</center>	
											</td>
											<td class="hidden-xs" style="vertical-align:middle">
												<center>
													25/1createcreate0/2015 10:25Hs.
												</center>	
											</td>
											<td style="vertical-align:middle">
												<center>
													<table>
														<tr>
															<td>
																<a href="{{asset('admin/news/1')}}" class="btn btn-sm default purple-stripe">
																	<i class="fa fa-edit"></i>
																	<span class="hidden-480"> Editar </span>
																</a>															
															</td>
															<td>
																<a href="#" class="btn btn-sm default blue-stripe">
																	<i class="fa fa-eye"></i>
																	<span class="hidden-480"> Ver </span>
																</a>
															</td>
															<td>
																<a href="#" data-id="2" class="btn btn-sm default red-stripe btnDeleteNews">
																	<i class="fa fa-trash-o"></i>
																	<span class="hidden-480"> Borrar </span>
																</a>															
															</td>
														</tr>
													</table>
												</center>	
											</td>
										</tr> -->	
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

	$('.btnDeleteNews').on('click', function(){
		var idnews = $(this).data('id');
		$('#FrmDeleteNews').attr('action', '{{asset('admin/news')}}/'+idnews);
		$('#deleteNews').modal('show');
	});
@endsection
