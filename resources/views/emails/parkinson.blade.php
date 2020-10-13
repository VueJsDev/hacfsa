<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Contacto - HACFSA</title>
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/pages/css/email.css')}}"/>
</head>
<body bgcolor="#FFFFFF">
 
<table class="head-wrap">
	<tr>
		<td></td>
		<td class="header container">
			<div class="content">
				<table class="body-wrap">
					<tr>
						<td></td>
						<td class="container" bgcolor="#FFFFFF">
							<div class="content">
								<table>
									<tr>
										<td>
											<h3>Hola</h3>
											<p class="lead">Tienes un mensaje desde la página de consultas sobre Parkinson del HAC.</p>
											<p>
												<b>Nombre:</b> {{ $nombre }}
											</p>
											<p>
												<b>Correo:</b> {{ $correo }}
											</p>											
											<p>
												<b>Mensaje:</b><br/>
												{{ $mensaje }}
											</p>
										</td>
									</tr>		
								</table>
							</div> 
						</td>
						<td></td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>				 
</body>
</html>