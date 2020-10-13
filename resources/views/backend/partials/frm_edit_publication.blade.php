<?php
		use App\Http\Helpers\Helpers;
		//optine el id del rol del usuario
		$rol= Helpers::rolusuario();
		$ten=$publication['ten'];
		
		$tpt=$publication['tpt'];
?>
	@if($rol == 1)
		<form action="{{url('admin/news/'. $publication['id'])}}" enctype="multipart/form-data"  method="post" role="form">
		<input type="hidden" name="_method" value="PUT">
	@elseif($rol == 3)
		@if($ten == 1)
			<form action="{{url('admin/news/'. $publication['iden'])}}" enctype="multipart/form-data"  method="post" role="form">
			<input type="hidden" name="_method" value="PUT">
		@else
			<form action="{{url('admin/news/'. $publication['id'].'/traducido')}}" enctype="multipart/form-data"  method="post" role="form">
		@endif
	@else
		@if($tpt == 1)
			<form action="{{url('admin/news/'. $publication['idpt'])}}" enctype="multipart/form-data"  method="post" role="form">
			<input type="hidden" name="_method" value="PUT">	
		@else
			<form action="{{url('admin/news/'. $publication['id'].'/traducido')}}" enctype="multipart/form-data"  method="post" role="form">
		@endif

	@endif
		    
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="portlet">
				<div class="portlet-title">
					<div class="caption">
					@if($rol == 2 or $rol== 3)
						<i class="fa fa-pencil-square-o"></i> Traduciendo // {{$publication['titulo']}}
					@else
						<i class="fa fa-pencil-square-o"></i> Edición publicación
					@endif
					</div>
					<div class="actions">

						<button type="submit" class="btn default green">
							<i class="fa fa-floppy-o"></i>
							<span class="hidden-480">
								Guardar 
							</span>
						</button>
						<a href="{{ url('admin/news') }}" class="btn default dark">
							<i class="fa fa-list-ul"></i>
							<span class="hidden-480">
								Listado 
							</span>
						</a>									 

					</div>
				</div>
				<div class="portlet-body form">

					<div class="form-body">
						<div class="col-md-8">
							<!-- ELIMINAR LA CLASE ERROR PARA EL USO NORMAL -->
							<div class="form-group @if ($errors->has('title')) {{'has-error'}} @endif">
								<label for="title" class="control-label">Título</label>
								@if($rol == 2 or $rol== 3)
									@if($publitraducido == "")
										<input name="title" type="text" value="" class="form-control" placeholder="Traducir título de la publicación">
									@else
										<input name="title" type="text" value="{{$publitraducido['titulo']}}" class="form-control" placeholder="Traducir título de la publicación">
									@endif
									@if ($errors->has('title'))
										<span class="help-block">el título es obligatorio.</span>
									@endif
								@else
									<input name="title" type="text" value="{{$publication['titulo']}}" class="form-control" placeholder="título de la publicación">
									@if ($errors->has('title'))
										<span class="help-block">el título es obligatorio.</span>
									@endif
								@endif	
							</div>										
							<div class="form-group">
								<label for="title" class="control-label">Tipo de Publicacion</label>
		                        <select name="tipopublicacion" class="form-control" >
		                            @foreach ($tipopublicaciones as $tipopublicacion)
		                            <option value="{{$tipopublicacion->id}}" <?php if($tipopublicacion->id === $publication['tipopublicacion_id']) { echo "selected=selected";}?>
		                                >
		                                    {{ $tipopublicacion->descripcion }}
		                                </option>
		                            @endforeach
		                        </select>
								<span class="help-block">el título es obligatorio.</span>
							</div>	

							<div class="item">
		                          <img src="{{ asset('/assets/frontend/images/noticias/' . $publication['urlimagen']) }}" class="img-responsive" alt="">
		                          	<div class="input-group">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
									  </div>
									  <div class="custom-file">
									    <input type="file" class="custom-file-input" id="inputGroupFile01"
									      aria-describedby="inputGroupFileAddon01" name="file">
									    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
									  </div>
									</div>			
	                        </div>

							<div class="form-group @if ($errors->has('news')) {{'has-error'}} @endif">
								<label for="news" class="control-label">Cuerpo</label>
								@if($rol == 2 or $rol== 3)
									@if($publitraducido == "")
										<textarea id="ckeditor" class="form-control ckeditor" name="news" rows="15"></textarea>
									@else
										<textarea id="ckeditor" class="form-control ckeditor" name="news" rows="15">{{$publitraducido['cuerpo']}}</textarea>
									@endif
									@if ($errors->has('news'))
										<span class="help-block">el cuerpo es obligatorio.</span>
									@endif
								@else
									<textarea id="ckeditor" class="form-control ckeditor" name="news" rows="15">{{ $publication['cuerpo'] }}</textarea>
									@if ($errors->has('news'))
										<span class="help-block">el cuerpo es obligatorio.</span>
									@endif
								@endif	
							</div>
						</div>
						<div class="col-md-4  well">
								<div class="row">
									<center>	
										<h4>Publicación</h4>
									</center>
								</div>	
								<div class="row">
									<label class="col-md-3 control-label">Estado</label>
									<div class="col-md-9">
										<select name="state" id="state" class="form-control">
											<option value="1" @if ($publication['publicar']==1) {{'selected'}} @endif>Publicado</option>
											<option value="0" @if ($publication['publicar']==0) {{'selected'}} @endif>No Publicar</option>
										</select>
									</div>
								</div>
							@if($rol==1)
								<div class="row" style="margin-top:15px">
									<center>
									<div class="actions">
									
										<a href="{{ url('es/noticias/' . $publication['slug']) }}" target="_blank" class="btn btn-sm default blue-stripe">
									
										<i class="fa fa-eye"></i>
										<span class="hidden-480">
										Vista previa </span>
										</a>&nbsp;&nbsp;&nbsp;&nbsp;
										<!--a href="#" class="btn btn-sm default red-stripe">
											<i class="fa fa-trash-o"></i>
											<span class="hidden-480"> Eliminar </span>
										</a -->								
									</div>											
									</center>
								</div>
							@endif
							@if($rol==2 and $tpt == 1)
								<div class="row" style="margin-top:15px">
									<center>
									<div class="actions">
									
											<a href="{{ url('pt/noticias/back/' . $publication['idpt']) }}" target="_blank" class="btn btn-sm default blue-stripe">
										
										<i class="fa fa-eye"></i>
										<span class="hidden-480">
										Vista previa </span>
										</a>&nbsp;&nbsp;&nbsp;&nbsp;
										<!--a href="#" class="btn btn-sm default red-stripe">
											<i class="fa fa-trash-o"></i>
											<span class="hidden-480"> Eliminar </span>
										</a -->								
									</div>											
									</center>
								</div>
							@endif
							@if($rol==3 and $ten == 1)
								<div class="row" style="margin-top:15px">
									<center>
									<div class="actions">
										<a href="{{ url('en/news/back/' . $publication['iden']) }}" target="_blank" class="btn btn-sm default blue-stripe">
										<i class="fa fa-eye"></i>
										<span class="hidden-480">
										Vista previa </span>
										</a>&nbsp;&nbsp;&nbsp;&nbsp;
										<!--a href="#" class="btn btn-sm default red-stripe">
											<i class="fa fa-trash-o"></i>
											<span class="hidden-480"> Eliminar </span>
										</a -->								
									</div>											
									</center>
								</div>
							@endif																											
						</div>									
					</div>								
				</div>
			</div>
			
			@section('ckeditor')
		    	<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
			@endsection
	</form>	


