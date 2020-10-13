<!-- AVISOS VARIOS DEL SISTEMA -->
                                        <div id="img_afirmativo" class="note note-success" style="display: none">
                                            <p>Se cargó correctamente. Actualizando en 3s.</p>
                                        </div>
                                        <div id="img_error" class="note note-danger" style="display: none">
                                            <p>Hubo un problema al cargar la imagen.</p>
                                        </div>
                                 
                                <!-- FIN DE AVISOS -->  
                                <div class="col-md-12">
                                    <!-- AVISOS VARIOS DEL SISTEMA -->
                               @if (session('message_typeimg'))
                                    @if (session('message_typeimg') == 1)
                                        <div class="note note-success">
                                            <p>{{ session('messageimg') }}</p>
                                        </div>
                                    @endif 
                                    @if (session('message_typeimg') == 3)
                                        <div class="note note-warning">
                                            <p>{{ session('messageimg') }}</p>
                                        </div>
                                    @endif  
                                @endif  
                                <!-- FIN DE AVISOS -->  
                                        <div class="form-body">
                                            {!! Form::open([
                                                'url' => 'admin/sections/uploadimgsections',
                                                'method'=> 'POST',
                                                'class' => 'dropzone',
                                                'id'    => 'my-dropzone',
                                                'files' => true])
                                            !!}
                                                <div class="dz-message">
                                                    <p class="text-info">Arrastra el/las imagenes/s aquí, o haz click.</p>
                                                </div>
                                                <div class="fallback">
                                                    <input type="file" name="file" multiple>
                                                </div>
                                                <div id="previewstelesalud"></div>
                                                <center>
                                                    <button type="submit" class="btn btn-success" id="submit-all"><i class="fa fa-arrow-circle-o-up"></i> Enviar archivos</button>
                                    
                                                </center>
                                            {!! Form::close() !!}
                                            
                                            <ul class="grid cs-style-3">
                                           
                                                @if (isset($imgsecciones))
                                                    @foreach ($imgsecciones as $llave=>$valor)
                                                        <li id="element{{ $llave }}">
                                                            <figure>
                                                                <img src="{{ asset('assets/frontend/images/imgsecciones/imgtelesalud/' . $imgsecciones[$llave]['basename']) }}" alt="{{ $imgsecciones[$llave]['basename'] }}">
                                                                <figcaption>
                                                                    <a class="btn red btnDeleteImage" data-name="{{ $imgsecciones[$llave]['basename'] }}" href="#"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endforeach
                                                @endif
                                                
                                            </ul>
                                        </div>
                                </div>