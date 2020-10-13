<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="" role="tab" id="heading{{ $dpto->id }}">
    <h4 class="panel-title">
      @if ($idiomaservicio == "en")
        <i class="fa fa-building"></i> {{ $dpto->endepto }}
        <div class="linea"></div>
      @elseif($idiomaservicio == "pt")
        <i class="fa fa-building"></i>  {{ $dpto->ptdepto }}
        <div class="linea"></div>
      @else
        <i class="fa fa-building"></i> Departamento de {{ $dpto->nombre }}
        <div class="linea"></div>
      @endif
    </h4>
  </div>
  <div>
    <table class="table  table-hover">
      <thead>
        <tr>
          @if ($idiomaservicio == "en")
            <th><i class="fa fa-group"></i> Services</th>
          @elseif($idiomaservicio == "pt")
            <th><i class="fa fa-group"></i> Serviços</th>
          @else
            <th><i class="fa fa-group"></i> Servicios</th>
          @endif
        </tr>
      </thead>
      <tbody>
        @foreach ($dpto['servicios'] as $servicio)
          <tr class="first clearfix" >
            @if ($idiomaservicio == "en")
                <td class="color-celda"><a href="{{route('serviceen',['id'=>$servicio->id])}}" class="texto-celda">{{$servicio->ennombre}}</a></td>
            @elseif ($idiomaservicio == "pt")
                <td class="color-celda"><a href="{{route('servico',['id'=>$servicio->id])}}" class="texto-celda">{{$servicio->ptnombre}}</a></td>
            @else
                @if($servicio->contenido == "NULL")
                  <td class="color-celda"><a href="#" class="texto-celda">{{$servicio->nombre}}</a></td>
                @else
                  <td class="color-celda"><a href="{{route('service',['id'=>$servicio->id])}}" class="texto-celda">{{$servicio->nombre}}</a></td>
                @endif
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>




