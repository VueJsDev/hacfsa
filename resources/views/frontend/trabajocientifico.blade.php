@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/lightbox.css') }}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/cientifico-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
        $idiomaservice = trans('menu.servicesmin');
        
?>

 <!--Cajas Izquierda -->

<div class="container">
      
    <div class="col-lg-12 clearfix">

       <a href="{{route('teaching')}}"><div class="col-md-2 articulo"><h1>DOCENCIA E INVESTIGACIÓN</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Publicaciones y Trabajos Científicos</h2>
          <div class="barra"></div>
          <img src="{{asset('assets/frontend/images/cientifico.jpg')}}">
              <p>• “Infección Neonatal por Herpes Simple: Reporte de Dos Casos”, Bioq. Natalia Figueroa, Servicio de Biología Molecular.<br><br>  
                • “Importancia Del Estudio Citogenético en Pareja Portadora de una Translocación. Reporte de un Caso”, Biol. Dávila Soledad, Servicio de Biología Molecular.<br><br>
                • “Modificaciones En La Calidad De Vida De Pacientes Con Cirugía Baríatrica”, Lic. Domecq Livia Patricia, Dra. Tocaimaza Laura B, Lic. Polo Rosanna N, Romero Elida B., Ávila Guillermo Pablo, Servicio de Cirugía Baríatrica.<br><br> 
                • “Estudio Observacional, Prospectivo y Metacéntrico Para El Relevamiento De Casos Con Mieloma Múltiple Cuyo Esquema de Tratamiento Farmacológico Incluya Revlimid (Lenalidomida)”. Dr. Rojo Pisarello Eduardo A., servicio de hematología.<br><br>
                • “Deleción Subtelomérica De 4q Y Material Extra Desconocido En Paciente Con Dismorfias Faciales Y Retardo Madurativo”, Biol. Soledad Dávila, Servicio De Biología Molecular.   
                • “Metátesis De Arcinoma Epidermoide En Tiroides”, Servicio de Clínica Médica.<br><br>   
                • “Enfermedades Granulomatosas Por IGG4”, Servicio de Clínica Médica.<br><br>   
                • “Neoadjuvancia En Cáncer De Cuello De Útero”, Dra. Rompato Silvana, Dra. Penayo Rosa, Dra. Gill Mabel, Dr. Companys Pablo, Dra. Perelli L., Dra. Irala G., Dra. Escobar S., Dra. Staringer J., Dr. Pereira S., Dr. Di Fiore H. y Acevedo S., Servicio De Oncología.<br><br> 
                • “Uretroplastia Post de Stent Uretral”, Dr. Wirz Walter, Dr. Urday Nicolás, Dr. Apóstolo Claudio E., Dr. Luco Montero Rogelio, Dr. Reinero Federico, Dra. Copes María G; Servicio de Urología.
              </p>
              </div>
       </div></div>
 
    </div>      
</div>
 
 
@endsection

@section('script_ateneos')

<script src="{{ asset('assets/frontend/js/lightbox-plus-jquery.min.js') }}"></script>


@endsection