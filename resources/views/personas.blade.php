@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/registrarpersona">
                              agregar persona
                            </a>
  <div class="row">
    <form action="/persona/buscar" method="get" accept-charset="utf-8">
      buscar persona por numero de cedula      
      <input type="text" name="cedula"> <input type="submit"  value="buscar">
    </form>
  </div>
  <div class="row">
  
                      <table width="100%">
                      <thead>
                        <tr>
                          <th>Cedula</th>
                          <th>nombre</th>
                          <th>apellido</th>
                          <th>sexo</th>
                          <th>tipo</th>
                          <th>rif</th>
                          <th>representante</th>
                          <th>nivel educativo</th>
                          <th>municipio</th>
                          <th>parroquia</th>
                          <th>sector</th>
                          <th>direccion</th>
                          <th>unidad de produccion</th>
                          <th>organizacion</th>
                          <th>telefono</th>
                          <th>email</th>
                          <th>accion</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $persona as $personaa )
                        <tr>
                          <td>
                            <a href="/persona/{{$personaa->cedula}}">
                              {{$personaa->cedula}}
                            </a>
                            
                          </td>
                          <td>{{$personaa->nombre}}</td>
                          <td>{{$personaa->apellido}}</td>
                          <td>{{$personaa->sexo}}</td>
                          <td>{{$personaa->tipo}}</td>
                          <td>{{$personaa->rif}}</td>
                          <td>{{$personaa->representante}}</td>
                          <td>{{$personaa->nivel_educativo}}</td>
                          <td>{{$personaa->municipio}}</td>
                          <td>{{$personaa->parroquia}}</td>
                          <td>{{$personaa->sector}}</td>
                          <td>{{$personaa->direccion}}</td>
                          <td>{{$personaa->unidad_produccion}}</td>
                          <td>{{$personaa->organizacion}}</td>
                          <td>{{$personaa->telefono}}</td>
                          <td>{{$personaa->email}}</td>
                          <td>
                            <a href="#" class="button tiny radius secondary">MODIFICAR</a>
                            <a href="/persona/{{$personaa->cedula}}/eliminar" class="button tiny radius alert">ELIMINAR</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    @if(count($persona)>10)

                      {{$persona->links() }}

                    @endif


    
  </div>
</div>
@endsection