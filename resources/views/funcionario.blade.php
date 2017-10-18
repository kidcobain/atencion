@extends('layouts.app')

@section('content')
<div class="container">

        @if (session('exito'))
        <div class="alert alert-success col-sm-offset-2 col-sm-8 mensaje">
            {{ Session::get('exito') }}
        </div>
    @endif
        <!-- Modal -->
        @include('partials.modalb')
                
        <!-- Modal -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$funcionario->nombre.' '.$funcionario->apellido}}
                    <a href="/funcionario/{{$funcionario->cedula}}/edicion">
                      ->Editar
                    </a>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-responsive">
                     
                      <tbody>

                        <tr>
                            <td>Cedula</td>
                            <td>{{$funcionario->cedula}}</td>
                        </tr>
                            
                        <tr>
                            <td>Nombre</td>
                            <td>{{$funcionario->nombre}}</td>
                        </tr>
                            
                        <tr>
                            <td>Apellido</td>
                            <td>{{$funcionario->apellido}}</td>
                        </tr>
                            
                        <tr>
                            <td>Sexo</td>
                            <td>{{($funcionario->sexo == 'm')? 'Masculino':'Femenino'}}</td>
                        </tr>
                            
                        <tr>
                            <td>Email</td>
                            <td>{{$funcionario->email}}</td>
                        </tr>
                            
                        <tr>
                            <td>Direccion</td>
                            <td>{{$funcionario->direccion}}</td>
                        </tr>
                            
                        <tr>
                            <td>Telefono</td>
                            <td>{{$funcionario->telefono}}</td>
                        </tr>  

                        <tr>
                            <td>Cargo</td>
                            <td>{{$funcionario->cargo}}</td>
                        </tr>
                            
                        <tr>
                            <td>Departamento</td>
                            <td>{{$funcionario->departamento}}</td>
                        </tr>
                               
                        <tr>
                            <td>Usuario</td>
                            <td>{{$funcionario->usuarios->usuario}}</td>
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
               Solicitudes de {{$funcionario->nombre.' '.$funcionario->apellido}} <a href="/solicitud/{{$funcionario->cedula}}/registrar">
                      ->añadir solicitud
                    </a>
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
                      <th>Funcionario</th>
                      <th></th>
                    </tr>
                  </thead>

                  @if(count($funcionario->solicitudes)>=1)

                      <tbody>
                        @foreach( $funcionario->solicitudes as $solicitud )
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
                            no existen solicitudes para este funcionario
                  @endif
                </table>
                {{-- $persona->links() --}}
            </div>
        </div>
    </div>
</div>

@endsection
