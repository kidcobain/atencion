@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$persona->nombre.' '.$persona->apellido}}
                    <a href="/editar/persona/{{$persona->cedula}}">
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
          <table width="100%">
          <thead>
            <tr>
              <th>lugar</th>
              <th>tipo</th>
              <th>solicitud</th>
              <th>observaciones</th>
              <th>fundo</th>
              <th>funcionario</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $persona->solicitudes as $solicitud )
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
                <a href="#" class="button tiny radius secondary">MODIFICAR</a>
                <a href="#" class="button tiny radius alert">ELIMINAR</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
