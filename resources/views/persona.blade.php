@extends('layouts.app')

@section('content')
<div class="container">
    
        <!-- Modal -->
        <!-- 
    <form id="frmEliminarUsuario" action="" method="POST">
        <input type="hidden" id="idusuario" name="idusuario" value="">
        <input type="hidden" id="opcion" name="opcion" value="eliminar">
        <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h4>
                    </div>
                    <div class="modal-body">                            
                        ¿Está seguro de eliminar al usuario?<strong data-name=""></strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="eliminar-usuario" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
 -->
 <!--
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
-->
        @include('partials.modalb')
        <!-- Modal -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$persona->nombre.' '.$persona->apellido}}
                    <a href="/persona/{{$persona->cedula}}/edicion">
                      ->Editar
                    </a>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-responsive">
                     
                      <tbody>

                        <tr>
                            <td>Cedula</td>
                            <td>{{$persona->cedula}}</td>
                        </tr>
                            
                        <tr>
                            <td>Nombre</td>
                            <td>{{$persona->nombre}}</td>
                        </tr>
                            
                        <tr>
                            <td>Apellido</td>
                            <td>{{$persona->apellido}}</td>
                        </tr>
                            
                        <tr>
                            <td>Sexo</td>
                            <td>{{$persona->sexo}}</td>
                        </tr>
                            
                        <tr>
                            <td>Natural / Juridica</td>
                            <td>{{$persona->tipo}}</td>
                        </tr>
                            
                        <tr>
                            <td>Rif</td>
                            <td>{{$persona->rif}}</td>
                        </tr>
                            
                        <tr>
                            <td>Representante</td>
                            <td>{{$persona->representante}}</td>
                        </tr>
                            
                        <tr>
                            <td>Nivel educativo</td>
                            <td>{{$persona->nivel_educativo}}</td>
                        </tr>
                            
                        <tr>
                            <td>Municipio</td>
                            <td>{{$persona->municipio}}</td>
                        </tr>
                            
                        <tr>
                            <td>Parroquia</td>
                            <td>{{$persona->parroquia}}</td>
                        </tr>
                            
                        <tr>
                            <td>Sector</td>
                            <td>{{$persona->sector}}</td>
                        </tr>
                            
                        <tr>
                            <td>Direccion</td>
                            <td>{{$persona->direccion}}</td>
                        </tr>
                            
                        <tr>
                            <td>Unidad de produccion</td>
                            <td>{{$persona->unidad_produccion}}</td>
                        </tr>
                            
                        <tr>
                            <td>Organizacion</td>
                            <td>{{$persona->organizacion}}</td>
                        </tr>
                            
                        <tr>
                            <td>Telefono</td>
                            <td>{{$persona->telefono}}</td>
                        </tr>
                            
                        <tr>
                            <td>Email</td>
                            <td>{{$persona->email}}</td>
                        </tr>
                            
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
               Solicitudes de {{$persona->nombre.' '.$persona->apellido}} <a href="/solicitud/{{$persona->cedula}}/registrar">
                      ->añadir solicitud
                    </a>
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
                  @if(count($persona->solicitudes)>=1)
                      <tbody>
                        @foreach( $persona->solicitudes()->paginate(10) as $solicitud )
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
                  @else
                      
                  </table>
                            no existen solicitudes para esta persona
                  @endif
                </table>
                {{ $persona->solicitudes()->paginate(10)->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
