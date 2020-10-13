
<?php
        use App\Http\Helpers\Helpers;
        //optine el id del rol del usuario
        $rol= Helpers::rolusuario();
?>
@inject('ServiceController','App\Http\Controllers\ServiceController')
<form action="{{url('admin/service/'. $servicio['id'])}}"  method="post" role="form">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="portlet">
		<div class="portlet-title">
		@if($rol == 1)
			<div class="caption">
				<i class="fa fa-pencil-square-o"></i> Editar Servicio
			</div>
		@else
			<div class="caption">
				<i class="fa fa-pencil-square-o"></i> Traducir Servicio {{$servicio['nombre']}}
			</div>
		@endif
			<div class="actions">

				<button type="submit" class="btn default green">
					<i class="fa fa-floppy-o"></i>
					<span class="hidden-480">
						Guardar 
					</span>
				</button>
				<a href="{{ url('admin/service') }}" class="btn default dark">
					<i class="fa fa-list-ul"></i>
					<span class="hidden-480">
						Listado 
					</span>
				</a>									 

			</div>
		</div>
		<!-- AVISOS VARIOS DEL SISTEMA -->
					@if (session('message_typeservice'))
						@if (session('message_typeservice') == $ServiceController::MESSAGE_SUCCESS_EDITION)
							<div class="note note-info">
								<p>{{ session('message') }}</p>
							</div>
						@endif
						@if (session('message_typeservice') == $ServiceController::MESSAGE_ERROR)
							<div class="note note-danger">
								<p>{{ session('message') }}</p>
							</div>
						@endif	
					@endif	
					<!-- FIN DE AVISOS -->
		<div class="portlet-body form">

			<div class="form-body">
				<div class="col-md-8">
					<!-- ELIMINAR LA CLASE ERROR PARA EL USO NORMAL -->
					<div class="form-group @if ($errors->has('nombreservicio')) {{'has-error'}} @endif">
						<label for="nombreservicio" class="control-label">Servicio</label>
						@if ($rol == 1)
							<input name="nombreservicio" type="text" value="{{$servicio['nombre']}}" class="form-control" placeholder="Nombre del Servico">
						@elseif ($rol == 2)
							<input name="nombreservicio" type="text" value="{{$servicio['ptnombre']}}" class="form-control" placeholder="Nombre del Servico">
						
						@else
							<input name="nombreservicio" type="text" value=" {{$servicio['ennombre']}}" class="form-control" placeholder="Nombre del Servico">
						
						@endif
						@if ($errors->has('nombreservicio'))
							<span class="help-block">el título es obligatorio.</span>
						@endif	
					</div>
					@if ($rol == 1)										
						<div class="form-group">
							<label for="departamentos" class="control-label">Departamento</label>
	                        <select name="departamentos" class="form-control" >
	                            @foreach ($departamentos as $departamento)
	                            
		                            <option value="{{$departamento->id}}" <?php if($departamento->id === $servicio['departamento_id']) { echo "selected=selected";}?>
		                                >
		                                
		                                    {{ $departamento->nombre }}
		                              
		                                
		                            </option>
	                            @endforeach
	                        </select>
							<span class="help-block">el título es obligatorio.</span>
						</div>
					@endif										
					<div class="form-group @if ($errors->has('contenido')) {{'has-error'}} @endif">
						<label for="contenido" class="control-label">Cuerpo</label>
						@if ($rol == 1)
							<textarea id="ckeditor" class="form-control ckeditor" name="contenido" rows="15">{{ $servicio['contenido'] }}</textarea>
						@elseif ($rol == 2)
							<textarea id="ckeditor" class="form-control ckeditor" name="contenido" rows="15">{{ $servicio['ptservice'] }}</textarea>
						@else
							<textarea id="ckeditor" class="form-control ckeditor" name="contenido" rows="15">{{ $servicio['enservice'] }}</textarea>
						@endif
							@if ($errors->has('contenido'))
								<span class="help-block">el cuerpo es obligatorio.</span>
							@endif	
					</div>
				</div>
					
			</div>								
		</div>
	</div>
	
	@section('ckeditor')
    	<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
	@endsection
</form>	