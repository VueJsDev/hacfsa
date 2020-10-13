<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-pencil-square-o"></i> Carga de Banners
        </div>
    </div>
    <div class="portlet-body form">
        <div id="mensaje_afirmativo" class="note note-success" style="display:none">
            <p>Se cargó correctamente. Actualizando en 3s.</p>
        </div>
        <div id="mensaje_error" class="note note-danger" style="display:none">
            <p>Hubo un problema al cargar el banner.</p>
        </div>
        <div class="form-body">
            {!! Form::open([
                'url' => 'admin/banner/uploadimages',
                'method'=> 'POST',
                'class' => 'dropzone',
                'id'    => 'my-dropzone',
                'files' => true])
            !!}
                <div class="dz-message">
                    <p class="text-info">Arrastra el/los banner/s aquí, o haz click.</p>
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
                @if (isset($paths))
                    @foreach ($paths as $llave=>$valor)
                        <li id="element{{ $llave }}">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/banners/' . $paths[$llave]['basename']) }}" alt="{{ $paths[$llave]['basename'] }}">
                                <figcaption>
                                    <a class="btn red btnDeleteImage" data-name="{{ $paths[$llave]['basename'] }}" href="#"><i class="fa fa-trash-o"></i> Eliminar</a>
                                </figcaption>
                            </figure>
                            <!-- <div class="form-group">
                                <label for="bannerUrl" class="control-label">Url destino</label>
                                <input name="bannerUrl" type="text" class="form-control" placeholder="url" value="{{ Input::old('bannerUrl') }}">
                                <a href="#" data-name="{{ $paths[$llave]['basename']}}" class="btn default blue btnBannerUrl">
									<i class="fa fa-plus"></i>
									<span class="hidden-480">
										Guardar
									</span>
								</a> 
                            </div>	 -->
                        </li>
                        	
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</div>


<script>
   
</script>