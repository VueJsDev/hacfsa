<?php
use App\Http\Helpers\Helpers;
//optine el id del rol del usuario
$rol = Helpers::rolusuario();
?>

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/dropzone/dropzone.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/gallery/galleryimages.css')}}"/>
@endsection
@section('ckeditor')
        <script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/ckeditor/ckfinder/ckfinder.js')}}" type="text/javascript"></script>
@endsection
<div class="portlet">

    <div class="portlet-body form">
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs">
                            <li class="active in">
                                <a href="#historia" data-toggle="tab">
                                Historia </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="historia">
                                <!-- AVISOS VARIOS DEL SISTEMA -->
                               @if (session('message_typeinsthistoria'))
                                    @if (session('message_typeinsthistoria') == 1)
                                        <div class="note note-success">
                                            <p>{{ session('messagehistoria') }}</p>
                                        </div>
                                    @endif
                                @endif
                                <!-- FIN DE AVISOS -->
                                <form action="{{ asset('admin/sections') }}" method="POST" role="form" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="portlet-title">
                                        <div class="actions" align="right">
                                            <button type="submit" class="btn default green" >
                                                <i class="fa fa-floppy-o"></i>
                                                @if($rol == 1)
                                                    <span class="hidden-480">
                                                        Guardar
                                                    </span>
                                                @else
                                                    <span class="hidden-480">
                                                        Traducir
                                                    </span>
                                                @endif
                                            </button>
                                        </div>
                                    </div>

                                    <label for="historia" class="control-label">Cuerpo</label>
                                            @if($rol == 1)
                                                  <textarea id="editorhistoria" class="form-control ckeditor" name="contenidohistoria" rows="15">{{$contenidohistoria}}</textarea>
                                            @else
                                                   <textarea id="editorhistoria" class="form-control ckeditor" name="contenidohistoria" rows="15"></textarea>
                                            @endif

                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>
