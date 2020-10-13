	<div class="portlet">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-pencil-square-o"></i> Carga de Imágenes
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				{!! Form::open([
					'url' => 'admin/images/uploadimages',
					'method'=> 'POST',
					'class' => 'dropzone',
					'id'	=> 'my-dropzone',
					'files'	=> true])
				!!}
					<input type="hidden" name="publicId" id="publicId" value="{{$publication['id']}}">
					<div class="dz-message">
						<p class="text-info">Arrastra los archivos aquí, o haz click.</p>
					</div>
					<div class="fallback">
						<input type="file" name="file" multiple>
					</div>
					<div id="previews"></div>
					<center>
						<button type="submit" class="btn btn-success" id="submit-all"><i class="fa fa-arrow-circle-o-up"></i> Enviar archivos</button>
					</center>	
				{!! Form::close() !!}	

				<ul class="grid cs-style-3">
					
					@if ($images)
						@foreach ($images as $image)
							<li id="element{{$image->id}}">
								<figure>
									<img src="{{asset('uploads/thumbs/'.$image->descripcion)}}" alt="{{$image->descripcion}}">
									<figcaption>
										<a class="btn red btnDeleteImage" data-id="{{$image->id}}" href="#"><i class="fa fa-trash-o"></i> Eliminar</a>
									</figcaption>
								</figure>
							</li>
						@endforeach	
					@endif
					<div>
						<label for="direccionimg">http://localhost:8000/uploads/{{$image->descripcion}}</label><br>
						
					</div>	
				</ul>        			
			</div>								
		</div>
	</div>

