@extends('layouts.app')

@section('content')
<div class="container" style="margin-left:0;">
  <a href="/registrarpersona">Agregar persona</a>
  <div class="row">
    <form action="/persona/buscar" method="get" accept-charset="utf-8">
      Buscar persona por numero de cedula      
      <input type="text" name="cedula"> <input type="submit"  value="Buscar">
    </form>
  </div>
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        asdfsdf
        </div>

      <div class="panel-body">
        <table width="100%" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Sexo</th>
              <th>Tipo</th>
              <th>Rif</th>
              <th>Representante</th>
              <th>Nivel educativo</th>
              <th>Municipio</th>
              <th>Parroquia</th>
              <th>Sector</th>
              <th>Direccion</th>
              <th>Unidad de produccion</th>
              <th>Organizacion</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Accion</th>
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
</div>
@endsection