<?php
	use App\Http\Controllers\UsersController;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<!-- COMIENZO ENCABEZADO -->
<head>
<meta charset="utf-8"/>
<title>HAC panel | Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- COMIENZO ESTILOS GLOBAL -->
<link href="{asset('assets/global/css/fontsgoogle.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- FIN ESTILOS GLOBALES -->
<!-- COMIENZO ESTILOS PROPIOS DE LA PAGINA -->
<link href="{{asset('assets/admin/pages/css/login.css')}}" rel="stylesheet" type="text/css"/>
<!-- FIN ESTILOS PROPIOS DE LA PAGINA -->
<!-- COMIENZO ESTILOS DEL TEMA -->
<link href="{{asset('assets/global/css/components.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{asset('assets/admin/layout/css/themes/default.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<!-- FIN ESTILOS DEL TEMA -->
<link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
<script src="https://www.google.com/recaptcha/api.js?hl=es-419&render=explicit&onload=onLoadCallback" async defer></script>
</head>
<!-- COMIENZO CUERPO -->
<body class="login">
<!-- COMIENZO LOGO -->
<div class="logo">
	<a href="{{asset('/')}}">
	<img src="{{asset('assets/admin/layout/img/Hac-panel-25.png')}}" alt=""/>
	</a>
</div>
<!-- FIN LOGO -->
<!-- COMIENZO LOGIN -->
<div class="content">
	<!-- AVISOS VARIOS DEL SISTEMA -->
	@if (session('message_type'))
		@if (session('message_type') == UsersController::MESSAGE_SUCCESS)
			<div class="note note-success">
				<p>{{ session('message') }}</p>
			</div>
		@endif
		@if (session('message_type') == UsersController::MESSAGE_ERROR)
			<div class="note note-danger">
				<p>{{ session('message') }}</p>
			</div>
		@endif
	@endif
	<!-- FIN DE AVISOS -->
	<!-- FORMULARIO LOGIN -->
	<form class="login-form" action="{{asset('auth/login')}}" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<h3 class="form-title">Accede a tu cuenta</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			Ingresar usuario y contraseña. </span>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Usuario</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username" value="{{ Input::old('username') }}" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
			</div>
		</div>
		<div class="form-actions">
        <div id="captcha"></div>
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Recordarme </label>
			<button type="submit" class="btn green pull-right" id="but">
			Ingresar <i class="m-icon-swapright m-icon-white" disabled></i>
			</button>
		</div>
		<div class="forget-password">
			<h4>¿Olvidaste tu contraseña?</h4>
			<p>
				 no te preocupes, click <a href="javascript:;" id="forget-password">
				aquí </a>
				para obtener una nueva.
			</p>
		</div>
	</form>
	<!-- FIN FORM LOGIN -->
	<!-- COMIENZO FORM RECUPERACION DE CONRTASEÑA -->
	<form class="forget-form" action="{{asset('auth/forgetpass')}}" method="post">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
		<h3>¿Se te olvidó tu contraseña?</h3>
		<p>
			 Introduzca su correo electrónico para restablecer la contraseña.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Correo" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> Atrás </button>
			<button type="submit" class="btn green pull-right" disabled>
			Enviar <i class="m-icon-swapright m-icon-white"></i>
			</button>
	     	</div>

	</form>
	<!-- FIN FORM DE RECUPERACION DE CONTRASEÑA -->
</div>
<!-- FIN LOGIN -->
<!-- COPYRIGHT -->
<div class="copyright">
	 {{ date("Y") }} &copy; DESARROLLO HAC.
</div>
<!-- FIN COPYRIGHT -->
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
<!-- COMIENZO PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<!-- FIN PLUGINS -->
<!-- COMIENZO SCRIPTS -->
<script src="{{asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/pages/scripts/login.js')}}" type="text/javascript"></script>
<!-- FIN SCRIPTS -->
<script>

        var verifyCall = function(response) {
           $('#but').removeAttr('disabled');
        }

		jQuery(document).ready(function() {
			Metronic.init();
			Layout.init();
			QuickSidebar.init()
		  	Login.init();
		});
    var onLoadCallback = function() {
        grecaptcha.render('captcha', {
            'sitekey' : '6LetYzMUAAAAAFbgajLCMQQIr7N3aH6xOvMGdx2F',
            'callback' : verifyCall
        });
    };
	</script>
<!-- FIN JAVASCRIPTS -->
</body>
<!-- FIN BODY -->
</html>
