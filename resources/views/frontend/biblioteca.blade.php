@extends('layouts.frontend.master')

@section('style_fron')
  <link rel="stylesheet" type="text/css" href="{{asset('assets/global/css/estiloskevin.css')}}"/>

@endsection
@section('content')
    <!--Slide -->
    <div class="container-fluid">
    <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/biblioteca-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')
<?php
$idiomaservice = trans('menu.servicesmin');

?>

  <!--Cajas Izquierda -->

<!--Cajas Izquierda -->

<div class="container">

    <div class="col-lg-12 clearfix">

       <a href="{{ route('teaching') }}"><div class="col-md-2 articulo"><h1>DOCENCIA E INVESTIGACIÓN</h1></div></a>

       <div class="segundo col-lg-12 rigth">
          <h2>Biblioteca</h2>
          <div class="barra"></div>
              <h2>Medicina</h2>
              <p>
                  <a href="http://www.diseaseamonth.com/" target="_blank">• Disease-a-Month</a><br>
                  <a href="http://www.e-medicum.com/" target="_blank">• E-medicum</a><br>
                  <a href="http://www.alfabeta.net/home/" target="_blank">• Grupo Alfa Beta</a><br>
                  <a href="https://www.ncbi.nlm.nih.gov/pubmed/" target="_blank">• PubMed – NCBI</a><br>
                  <a href="http://annals.org/aim">• Annals of Internal Medicine</a><br>
                  <a href="https://www.nlm.nih.gov/pubs/factsheets/medline.html" target="_blank">• MEDLINE Fact Sheet</a><br>
                  <a href="http://www.nejm.org/" target="_blank">• The New England Journal of Medicine</a><br>
                  <a href="https://www.uptodate.com/es/home" target="_blank">• UpToDate</a><br>
                  <a href="hhttp://www.amedeo.com/" target="_blank">• Amedeo</a><br>
                  <a href="http://bvsalud.org/es/" target="_blank">• Biblioteca Virtual de Salud-BVS</a><br>
                  <a href="https://www.biomedcentral.com/" target="_blank">• BioMed Central</a><br>
                  <a href="http://www.freebooks4doctors.com/" target="_blank">• FreeBooks4Doctors</a><br>
                  <a href="http://www.freemedicaljournals.com/" target="_blank">• Free Medical Journals</a><br>
                  <a href="http://www.cnen.gov.br/centro-de-informacoes-nucleares/livre" target="_blank">• LivRe-Brasil</a><br>
                  <a href="https://medlineplus.gov/spanish/" target="_blank">• MedlinePlus</a><br>
                  <a href="https://www.medscape.com/" target="_blank">• Medscape</a><br>
              </p>
              <h2>Vínculos</h2>
              <p>
                  <a href="http://www.aaeeh.org.ar/" target="_blank">• AAEEH</a><br>
                  <a href="http://www.archbronconeumol.org/" target="_blank">• Archivos de Bronconeumonología</a><br>
                  <a href="https://ccforum.biomedcentral.com/" target="_blank">• Critical Care</a><br>
                  <a href="https://www.elsevier.com/" target="_blank">• Elsevier</a><br>
                  <a href="https://medlineplus.gov/spanish/ency/article/000158.htm" target="_blank">• Generalidades sobre la insuficiencia cardíaca-MedlinePlus</a><br>
                  <a href="http://hepatitis.cl/" target="_blank">• Hepatitis-Enfermedades del Hígado</a><br>
                  <a href="http://www.intramed.net/" target="_blank">• IntraMed-Medicina general</a><br>
                  <a href="http://www.incucai.gov.ar/" target="_blank">• INCUCAI</a><br>
                  <a href="https://www.dicomlibrary.com/" target="_blank">• MedDream</a><br>
                  <a href="http://www.medicinabuenosaires.com/" target="_blank">• Medicina Buenos Aires-Publicación de la Fundación Revista Medicina</a><br>
                  <a href="http://www.corporativo.msd.com.ar/" target="_blank">• MSD Argentina</a><br>
                  <a href="https://www.ncbi.nlm.nih.gov/" target="_blank">• National Center for Biotechnology Information</a><br>
                  <a href="https://www.nih.gov/" target="_blank">• National Institutes of Health (NIH)</a><br>
                  <a href="hhttps://www.rima.org/" target="_blank">• RIMA | Red Informática de Medicina Avanzada</a><br>
                  <a href="http://www.sac.org.ar/" target="_blank">• SAC-Sociedad Argentina de Cardiología</a><br>
                  <a href="http://www.diabetes.org.ar/" target="_blank">• Sociedad Argentina de Diabetes: SAD</a><br>
                  <a href="https://www.sadi.org.ar/" target="_blank">• SADI-Sociedad Argentina de Infectología</a><br>
                  <a href="http://www.sati.org.ar/" target="_blank">• SATI-Sociedad Argentina de Terapia Intensiva</a><br>
                  <a href="http://www.smiba.org.ar/" target="_blank">• SMIBA-Sociedad de Medicina Interna de Buenos Aires</a><br>
                  <a href="https://sage.org.ar/" target="_blank">• Sociedad Argentina de Gastroenterología</a><br>
                  <a href="http://www.saha.org.ar/" target="_blank">• SAHA-Sociedad Argentina de Hipertensión Arterial</a><br>
                  <a href="http://www.neumo-argentina.org/" target="_blank">• Sociedad Argentina de Neumonología</a><br>
                  <a href="http://www.senefro.org/modules.php?name=home&lang=ES" target="_blank">• S.E.N-Sociedad Española de Nefrología</a><br>
                  <a href="https://www.ser.es/" target="_blank">• SER-Sociedad Española de Reumatología</a>
              </p>
              <h2>Infectología</h2>
              <p>
                  <a href="https://www.sadi.org.ar/" target="_blank">• Sociedad Argentina de Infectología (SADI)</a><br>
                  <a href="http://adeci.org.ar/" target="_blank">• Asociación Argentina de Enfermeros en Control de Infecciones (ADECI)</a><br>
                  <a href="http://codeinep.org/" target="_blank">• Grupo Asesor en Control de Infecciones y Epidemiología (CODEINEP)</a><br>
                  <a href="http://www.idsociety.org/Index.aspx" target="_blank">• IDSA</a><br>
                  <a href="http://www.sat-argentina.com/" target="_blank">• Sociedad Argentina de Trasplante (SAT)</a><br>
                  <a href="hhttps://www.huesped.org.ar/" target="_blank">• Fundación HUÉSPED</a><br>
                  <a href="http://who.int/es/" target="_blank">• Organización Mundial de la Salud (OMS)</a><br>
                  <a href="https://www.ncbi.nlm.nih.gov/pubmed/" target="_blank">• PubMed</a>
              </p>
              <h2>Nutrición</h2>
              <p>
                  <a href="http://www.anmat.gov.ar/" target="_blank">• ANMAT</a><br>
                  <a href="http://aanep.org.ar/" target="_blank">• Asociación Argentina de Nutrición Enteral y Parental (AANEP)</a><br>
                  <a href="http://www.intramed.net/" target="_blank">• IntraMed</a><br>
                  <a href="http://www.saota.org.ar/" target="_blank">• SAOTA</a><br>
                  <a href="http://sanutricion.org.ar/" target="_blank">• Sociedad Argentina de Nutrición (SAN)</a><br>
                  <a href="http://www.nutrinfo.com/" target="_blank">• Nutrinfo</a><br>
                  <a href="http://www.alfabeta.net/home/" target="_blank">• AlfaBETA</a>
              </p>
              </div>
       </div></div>

    </div>
</div>
@endsection