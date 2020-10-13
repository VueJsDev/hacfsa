<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<!-- ENCABEZADO -->
<head>
<meta charset="utf-8"/>
<title>HACPANEL</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="panel de administración de contenidos HACPANEL" name="description"/>
<meta content="developers HACPANEL" name="author"/>
<!-- ESTILOS GLOBALES -->

<link href="{{asset('assets/global/css/fontsgoogle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- FIN ESTILOS GLOBALES -->
<!-- ESTILOS DEL TEMPLATES -->
<link href="{{asset('assets/global/css/components.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('assets/admin/layout/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<!-- FIN ESTILOS TEMPLATES -->
<!-- ESTILOS PROPIOS DE LA PAGINA -->
@section('style')

@show
<!-- FIN ESTILOS PROPIOS DE LA PAGINA -->
<link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
</head>
<!-- FIN ENCABEZADO -->
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- HEADER -->

@include('layouts.admin.sidebar')

<!-- FIN HEADER -->
<div class="clearfix">
</div>
<!-- COMIENZO CONTENEDOR -->
@section('content')

@show
<!-- FIN CONTENEDOR -->
<!-- INICIO FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 {{ date("Y") }} &copy; DESARROLLO HAC.
	</div>
	<div class="page-footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- FIN FOOTER -->
<!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('assets/global/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>

<!-- FIN CORE PLUGINS -->
<script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<!-- SCRIPT NECESARIOS PARA CADA MODULO -->
@section('plugins')

@show
@section('ckeditor')

@show
<!-- FIN SCRIPTS MODULOS -->
<script>
    jQuery(document).ready(function() {
       	Metronic.init();
		Layout.init();

		@section('scripts')

		@show

		@section('scriptslogo')

		@show

		@section('scriptshistoria')

		@show

		@section('scriptstelesalud')

		@show


    });
  </script>
<!-- FIN JAVASCRIPTS -->
</body>
<!-- FIN BODY -->
</html>
