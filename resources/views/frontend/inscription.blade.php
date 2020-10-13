
<?php
$idiomasitio = trans('menu.idlanguage');
?>

@if($idiomasitio == "es")
	<div class="container" align="center">
			<a href="{{route('evento_inscripcion')}}" class="btn btn-inscripcion"><h8>Pre-Inscripción a Residencias</h8></a> 
			<a href="{{route('parkinson_es')}}" class="btn btn-consultaParkinson"><h8>Consultas sobre Parkinson</h8></a>
	</div>
@endif



