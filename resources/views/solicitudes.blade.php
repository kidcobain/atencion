@extends('layouts.app')

@section('content')
<div class="container">
        <!-- Modal -->
     
<div class="row">
        @include('partials.modalb')
  
</div>
<div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
               Solicitudes
            </div>

            <div class="panel-body">
                <table width="100%" class="table table-bordered table-striped table-responsive">
                  <!-- <table width="100%"> -->
                  <thead>
                    <tr>
                      <th>Cedula solicitante</th>
                      <th>Nombre solicitante</th>
                      <th>Lugar</th>
                      <th>Tipo</th>
                      <th>Solicitud</th>
                      <th>Observaciones</th>
                      <th>Fundo</th>
                      <th>Fecha</th>
                      <th>Funcionario</th>
                      <th></th>
                    </tr>
                  </thead>
                   @if(count($solicitudes)>=1)
                  <tbody>
                    @foreach( $solicitudes as $solicitud )
                    <tr>
                      <td>
                        <a href="/persona/{{$solicitud->persona->cedula}}">
                        {{$solicitud->persona->cedula}}
                            </a>
                      </td>
                      <td>{{$solicitud->persona->nombre.' '.$solicitud->persona->apellido}}</td>
                      <td>{{$solicitud->lugar}}</td>
                      <td>{{$solicitud->tipo}}</td>
                      <td>{{$solicitud->solicitud}}</td>
                      <td>{{$solicitud->observaciones}}</td>
                      <td>{{$solicitud->fundo}}</td>
                      <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $solicitud->fecha)->format('d/m/Y') }}</td>
                      <td>
                            <a href="/funcionario/{{$solicitud->funcionario->cedula}}">
                                {{$solicitud->funcionario->nombre.' '.$solicitud->funcionario->apellido}}
                            </a>
                        </td>
                      <td>
                        <a href="/solicitud/{{$solicitud->id}}/edicion" class="button tiny radius secondary">MODIFICAR</a>
                        <!-- <a href="/solicitud/{{$solicitud->id}}/eliminar" class="button tiny radius alert" data-toggle='modal' data-target='#modalEliminar'>ELIMINAR</a> 
                        <a href="#" data-href="/solicitud/{{$solicitud->id}}/eliminar" data-toggle="modal" data-target="#confirm-delete">Delete record #23</a><br>
                        -->
                            
                            <button class="btn btn-danger" data-href="/solicitud/{{$solicitud->id}}/eliminar" data-toggle="modal" data-target="#confirm-delete">
                                Eliminar
                            </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  @else
                      
                  </table>
                            Por los momentos no existen solicitudes registradas en el sistema
                  @endif
                </table>
                {{ $solicitudes->links() }}
            </div>
        </div>
    </div>
<script>
    $(document).ready(function() {
        $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });
    });
</script>
@endsection
