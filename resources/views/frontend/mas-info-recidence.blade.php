@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/info-residencias-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
$idiomaservice = trans('menu.servicesmin');

?>

  <!--Cajas Izquierda -->

  <div class="container">

        <div class="col-lg-12 clearfix">

              <div class="col-md-4 primero clearfix">
                <a href="{{route('recidencia')}}"><div class="col-md-2 articulo"><h1>Residencias</h1></div></a>
                <a href="{{route('evento_inscripcion')}}"><div class="col-md-2 mas"><h1>Pre Inscripción Residencias</h1></div></a>
              </div>

              <div class="segundo col-lg-12">
                  <h2>Información de Residencias</h2>
                  <div class="barra"></div>

                  <div class="colapse">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Residencia en Cirugía General
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <a href="{{asset('assets/frontend/images/RESIDENCIAS DE CIRUGIA GENERAL.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS DE CIRUGIA GENERAL.png')}}"></a>
                        <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA EN CLÍNICA MÉDICA</div></a>-->
                        </div>
                      </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Residencia en Diagnóstico Por Imágenes
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/RESIDENCIAS DIAGNOSTICO POR IMAGENES.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS DIAGNOSTICO POR IMAGENES.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA EN TERAPIA INTENSIVA ADULTOS</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Residencia de Endocrinología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/RESIDENCIAS ENDOCRINOLOGIA.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS ENDOCRINOLOGIA.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE CARDIOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div>
                        <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Residencia de Infectología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/RESIDENCIAS INFECTOLOGIA.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS INFECTOLOGIA.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE DIAGNÓSTICO POR IMÁGENES</div></a>-->
                          </div>
                          </div>
                        </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Residencia de Kinesiología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/RESIDENCIAS KINESIOLOGIA.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS KINESIOLOGIA.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA MÉDICA DE INFECTOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Residencia Postbásica de Terapía Intensiva Pediátrica 
                            </a>
                          </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/RESIDENCIAS posbasica en terapia intensiva.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/RESIDENCIAS posbasica en terapia intensiva.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA MÉDICA DE ENDOCRINOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div> 

                  {{-- Dejar esto a modo de ejemplo --}}
                  {{-- <div class="colapse">
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Residencia en Clínica Médica
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <a href="{{asset('assets/frontend/images/CLINICAMEDICA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/CLINICAMEDICA-2020.png')}}"></a>
                        <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA EN CLÍNICA MÉDICA</div></a>-->
                        </div>
                      </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Residencia en Terapia Intensiva Adultos
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/TERAPIAADULTOS-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/TERAPIAADULTOS-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA EN TERAPIA INTENSIVA ADULTOS</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Residencia de Cardiología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/CARDIOLOGIA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/CARDIOLOGIA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE CARDIOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div>
                        <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Residencia de Diagnóstico por Imágenes
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/DIAGNOSTICOPORIMAGENES-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/DIAGNOSTICOPORIMAGENES-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE DIAGNÓSTICO POR IMÁGENES</div></a>-->
                          </div>
                          </div>
                        </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Residencia Médica de Infectología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/INFECTOLOGIA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/INFECTOLOGIA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA MÉDICA DE INFECTOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Residencia Médica de Endocrinología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/ENDOCRINOLOGIA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/ENDOCRINOLOGIA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA MÉDICA DE ENDOCRINOLOGÍA</div></a>-->
                          </div>
                        </div>
                      </div> 
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingNine">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Residencia de Cirugía General
                            </a>
                          </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/CIRUGIAGENERAL-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/CIRUGIAGENERAL-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE CIRUGÍA GENERAL</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTen">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              Residencia de Kinesiología
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/KINESIOLOGIA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/KINESIOLOGIA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE KINESIOLOGIA</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEight">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Residencia Postbásica de Terápia Intensiva Pediátrica
                            </a>
                          </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/POSTBASICAPEDIATRICA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/POSTBASICAPEDIATRICA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA POSTBÁSICA DE TERÁPIA INTENSIVA PEDIÁTRICA</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingEleven">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              Residencia Postbásica de Cuidados Paliativos
                            </a>
                          </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                          <div class="panel-body">
                          <!--<a href="img/.png" target="_blank"><img src="img/.png"></a>
                          <a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA POSTBÁSICA DE CUIDADOS PALIATIVOS/div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTuelve">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTuelve" aria-expanded="false" aria-controls="collapseTuelve">
                              Residencia de Ingeniería Clínica
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTuelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTuelve">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/INGENIERIACLINICA-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/INGENIERIACLINICA-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA DE INGENIERÍA CLÍNICA</div></a>-->
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTrece">
                          <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTrece" aria-expanded="false" aria-controls="collapseTrece">
                              Residencia en Gestión de Recursos Físicos en Salud
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTrece" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTrece">
                          <div class="panel-body">
                          <a href="{{asset('assets/frontend/images/GESTIONDERECURSOS-2020.png')}}" target="_blank"><img src="{{asset('assets/frontend/images/GESTIONDERECURSOS-2020.png')}}"></a>
                          <!--<a href="#"><div class="col-md-2 pasto clearfix">TESTIMONIO RESIDENCIA EN GESTIÓN DE RECURSOS FÍSICOS EN SALUD</div></a>-->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}  
                  {{-- Fin dejar esto a modo de ejemplo --}}

              </div>
        </div>
     
  </div>


<div class="container presentacion" align="center">
  <h6>Consultas al Dpto. de Docencia e Investigación<br>
  Tel HAC: 54-03704-436109/441/442 - Interno/113<br>
  MAIL:docenciahacfsa@gmail.com
</div>
@endsection





