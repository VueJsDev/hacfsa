@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/dropzone/dropzone.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/gallery/galleryimages.css')}}"/>
@endsection
<?php
        use App\Http\Helpers\Helpers;
        //optine el id del rol del usuario
        $rol= Helpers::rolusuario();
?>

<div class="portlet">

    <div class="portlet-body form">
            <!-- sections-->
       <!-- BEGIN PAGE CONTENT-->
        
        
            <div class="row">
            
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                        @if (empty(session('activartelesalud')))
                            <li class="active in">
                                <a href="#telesaludimg" data-toggle="tab">
                                Imagenes </a>
                            </li>
                        @else
                            <li class="@if (session('activartelesalud') == 'telesaludimg') {{ 'active in' }} @endif">
                                <a href="#telesaludimg" data-toggle="tab">
                                Imagenes </a>
                            </li>
                        @endif
                        @if($rol ==1)
                            <li class="@if (session('activartelesalud') == 'telesaludvideo') {{ 'active in' }} @endif">
                                <a href="#telesaludvideo" data-toggle="tab">
                                Video </a>
                            </li>
                        @endif
                        </ul>
                        <div class="tab-content">
                            @if (empty(session('activartelesalud')))
                                <div class="tab-pane fade active in" id="telesaludimg">
                                    @include('backend.partials.modulos.img_telesalud')
                                        
                                </div>
                            @else
                                <div class="tab-pane fade @if (session('activartelesalud') == 'telesaludimg') {{ 'active in' }} @endif" id="telesaludimg">
                                    @include('backend.partials.modulos.img_telesalud')
                                        
                                </div>
                            @endif
                            <div class="tab-pane fade @if (session('activartelesalud') == 'telesaludvideo') {{ 'active in' }} @endif" id="telesaludvideo">
                                   <!-- AVISOS VARIOS DEL SISTEMA -->
                               @if (session('message_typevideo'))
                                    @if (session('message_typevideo') == 1)
                                        <div class="note note-success">
                                            <p>{{ session('messagevideo') }}</p>
                                        </div>
                                    @endif  
                                @endif  
                                <!-- FIN DE AVISOS -->  
                                    <div class="col-md-12">
                                        <form action="{{ asset('admin/sections/videotelesalud') }}" method="POST" role="form" class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Enlace</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" name="enlace" placeholder="Url">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <div class="form-actions nobg fluid">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <!-- BEGIN PAGE CONTENT-->
    
            <!-- END PAGE CONTENT-->    
    </div>
</div>

@section('scriptstelesalud')
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilesize: 10, //MB
            maxFiles: 3,
            previewsContainer: "#previewstelesalud",
            params: {
                     token: '{{ csrf_token() }}'
                  },
            init: function() {
                var submitButton = document.querySelector('#submit-all');
                myDropzone = this;

                submitButton.addEventListener('click', function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });

                this.on('addedfile', function(file){
                    //alert('agregó un archivo');
                });

                this.on('complete', function(file){
                    myDropzone.removeFile(file);
                });

            },
            success: function(data) {
                if (data.accepted){
                    
                    window.location ="/admin/redirecciontelesalud/2";
                    
    
                } else {
                    $('#img_afirmativo').hide();
                    $('#img_error').show();
                }
                
            }
        }
    //FIN DROPZONE
    $('.btnDeleteImage').live('click', function(e){
        e.preventDefault();
        $('#nameSections').val($(this).data('name'));
        $('#mdDeleteImage').modal('show');
    });

    $('#btnMdDeleteImg').on('click', function(){
        $.ajax({
            method: "POST",
            url: "{{asset('admin/sections/deleteimgsections')}}",
            data: { 'name': $('#nameSections').val(), '_token': '{{ csrf_token() }}' },
            })
            .done(function( data ) {
                if (data == 'ok') {
                    window.location ="/admin/redirecciontelesalud/1";
                }
            });
    });
@endsection
