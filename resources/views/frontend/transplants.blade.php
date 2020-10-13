@extends('layouts.frontend.master')

@section('content')
    <!--Slide -->
    <div class="container-fluid">
        <div class="row">
            <img src="{{asset('assets/frontend/images/portadas/trasplante-01.jpg')}}">
        </div>
    </div>

    @include('frontend.inscription')

    <!--Tasplante -->
    <div class="container">
        <div class="cibersalud">
        <h2>{{trans('body.transplant')}}</h2>
        	<div class="trasplante"><p>{!!trans('contenbody.tpancreas')!!}</p></div>
         </div>
      </div>
    </div>
    <?php
$idiomarenal    = trans('body.renalmin');
$idiomahepatic  = trans('body.hepaticmin');
$idiomacardiac  = trans('body.cardiacmin');
$idiomapancreas = trans('body.pancreasmin');
?>

     <!-- <div id="box" align="center">
      </div> -->
         <div class="container" align="center">

               <!-- <a href="{{ route($idiomarenal) }}"><div class="caja2 texto"><h8> {{trans('body.renalcompleto')}}</h8><hr></div></a>

            <a href="{{ route($idiomahepatic) }}"><div class="caja2 texto"><h8> {{trans('body.hepaticcompleto')}}</h8><hr></div></a>

            <a href="{{ route($idiomacardiac) }}"><div class="caja2 texto"><h8> {{trans('body.cardiaccompleto')}}</h8><hr></div></a> -->
            <a href="#"><div class="caja2 texto"><h8> {{trans('body.renalcompleto')}}</h8><hr></div></a>

            <a href="#"><div class="caja2 texto"><h8> {{trans('body.hepaticcompleto')}}</h8><hr></div></a>

            <a href="#"><div class="caja2 texto"><h8> {{trans('body.cardiaccompleto')}}</h8><hr></div></a>

            <a href="#"><div class="caja2 texto"><h8>{{trans('body.reno_pancompleto')}}</h8><hr></div></a>
         </div>
    

    <!--Tabla Tasplante-->
    <div class="container">
        <div class="tabla">
        <h2>{{trans('body.transplnatshopital')}}</h2>
        </div>
     </div>

     {{-- <div class="container">
         <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
         <canvas id="pieChart" width="755" height="277" class="chartjs-render-monitor" style="display: block; width: 755px; height: 277px;"></canvas>
         <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled-4.10.0.min.js"></script>
      </div> --}}

     <div class="container">
        <div class="tabla">
       <div class="table-responsive">

      <table class="table table-striped table-bordered">
      <tr>
        <th class="horizontal">{{trans('body.year')}}</th>
        <th class="horizontal">{{trans('body.renal')}}</th>
        <th class="horizontal">{{trans('body.hepatic')}}</th>
        <th class="horizontal">{{trans('body.cardiac')}}</th>
        <th class="horizontal">{{trans('body.hepatorenal')}}</th>
        <th class="horizontal">{{trans('body.reno_pan')}}</th>
        <th class="horizontal">TOTAL</th>
      </tr>

      <tr>
        <td class="vertical">2007</td>
        <td class="vertical">5</td>
        <td class="vertical">4</td>
        <td class="vertical">1</td>
        <td class="vertical"></td>
        <td class="vertical">0</td>
        <td class="vertical">10</td>
     </tr>

       <tr>
        <td class="vertical">2008</td>
        <td class="vertical">13</td>
        <td class="vertical">11</td>
        <td class="vertical">3</td>
        <td class="vertical"></td>
        <td class="vertical">0</td>
        <td class="vertical">27</td>
     </tr>

       <tr>
        <td class="vertical">2009</td>
        <td class="vertical">8</td>
        <td class="vertical">5</td>
        <td class="vertical">2</td>
        <td class="vertical"></td>
        <td class="vertical">1</td>
        <td class="vertical">16</td>
     </tr>

     <tr>
        <td class="vertical">2010</td>
        <td class="vertical">25</td>
        <td class="vertical">3</td>
        <td class="vertical">3</td>
        <td class="vertical"></td>
        <td class="vertical">2</td>
        <td class="vertical">33</td>
     </tr>

     <tr>
        <td class="vertical">2011</td>
        <td class="vertical">19</td>
        <td class="vertical">3</td>
        <td class="vertical">1</td>
        <td class="vertical"></td>
        <td class="vertical">2</td>
        <td class="vertical">25</td>
     </tr>

     <tr>
        <td class="vertical">2012</td>
        <td class="vertical">9</td>
        <td class="vertical">7</td>
        <td class="vertical">1</td>
        <td class="vertical"></td>
        <td class="vertical">0</td>
        <td class="vertical">17</td>
     </tr>

     <tr>
        <td class="vertical">2013</td>
        <td class="vertical">8</td>
        <td class="vertical">3</td>
        <td class="vertical">2</td>
        <td class="vertical"></td>
        <td class="vertical">1</td>
        <td class="vertical">14</td>
     </tr>

     <tr>
        <td class="vertical">2014</td>
        <td class="vertical">17</td>
        <td class="vertical">3</td>
        <td class="vertical">1</td>
        <td class="vertical"></td>
        <td class="vertical">1</td>
        <td class="vertical">22</td>
     </tr>

     <tr>
        <td class="vertical">2015</td>
        <td class="vertical">14</td>
        <td class="vertical">3</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">1</td>
        <td class="vertical">1</td>
        <td class="vertical">19</td>
     </tr>

     <tr>
        <td class="vertical">2016</td>
        <td class="vertical">13</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">2</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">15</td>
     </tr>

     <tr>
        <td class="vertical">2017</td>
        <td class="vertical">16</td>
        <td class="vertical">3</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">1</td>
        <td class="vertical">20</td>
     </tr>

     <tr>
        <td class="vertical">2018</td>
        <td class="vertical">14</td>
        <td class="vertical">3</td>
        <td class="vertical">1</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">1</td>
        <td class="vertical">19</td>
     </tr>
     <tr>
        <td class="vertical">2019</td>
        <td class="vertical">22</td>
        <td class="vertical">5</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">&nbsp;</td>
        <td class="vertical">24</td>
     </tr>

      <tr>
        <td class="vertical">TOTAL</td>
        <td class="vertical">183</td>
        <td class="vertical">53</td>
        <td class="vertical">17</td>
        <td class="vertical">1</td>
        <td class="vertical">10</td>
        <td class="vertical">264</td>
     </tr>

      </table>
      </div>
    </div>
    </div>


    <script type="text/javascript">
            //pie
         var ctxP = document.getElementById("pieChart").getContext('2d');
         var myPieChart = new Chart(ctxP, {
         type: 'pie',
         data: {
         labels: ["Renal", "Hepático", "Cardíaco", "Hepatorenal", "Reno Pancreático"],
         datasets: [{
         data: [183, 53, 17, 1, 10],
         backgroundColor: ["#FDB45C", "#46BFBD", "#F7464A", "#949FB1", "#4D5360"],
         hoverBackgroundColor: ["#FFC870", "#5AD3D1", "#FF5A5E","#A8B3C5", "#616774"]
         }]
         },
         options: {
         responsive: true
         }
         });

         $('.carousel').carousel()

</script>
@endsection
