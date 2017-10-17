@extends('layouts.app')

@section('content')
<div class="container">
        <!-- Modal -->
     
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmar</h4>
                </div>
            
                <div class="modal-body">
                    <p>¿Está seguro que desea eliminar el registro?</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger btn-ok">Eliminar</a>
                </div>
            </div>
        </div>
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
                      <th>Lugar</th>
                      <th>Tipo</th>
                      <th>Solicitud</th>
                      <th>Observaciones</th>
                      <th>Fundo</th>
                      <th>Funcionario</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $solicitudes as $solicitud )
                    <tr>
                      <td>{{$solicitud->lugar}}</td>
                      <td>{{$solicitud->tipo}}</td>
                      <td>{{$solicitud->solicitud}}</td>
                      <td>{{$solicitud->observaciones}}</td>
                      <td>{{$solicitud->fundo}}</td>
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
                </table>
                {{-- $persona->links() --}}
            </div>
        </div>
    </div>
    <script src="/js/jquery-2.1.4.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });
    });
</script>
@endsection
