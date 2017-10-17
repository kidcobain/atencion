@extends('layouts.app')

@section('content')
<div class="container" style="margin-left:0; width: unset;">
  <a href="/registrarpersona">Agregar persona</a>
  <div class="row">
    <form action="/persona/buscar" method="get" accept-charset="utf-8">
      Buscar persona por numero de cedula      
      <input type="text" name="cedula"> <input type="submit"  value="Buscar">
    </form>
  </div>
  <div class="row">
    <div class="panel panel-default">
      
      
      <div class="panel-body">
        <table width="100%" class="table table-bordered table-striped table-responsive">
          <thead>
            <tr>
              <th>Cedula</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Sexo</th>
              <th>direccion</th>
              <th>Telefono</th>
              <th>Email</th>
              <th>Cargo</th>
              <th>Departamento</th>
              <th>Usuario</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $funcionarios as $funcionario )

              
            <tr>
              <td>
                <a href="/funcionario/{{$funcionario->cedula}}">
                  {{$funcionario->cedula}}
                </a>
                
              </td>
              <td>{{$funcionario->nombre}}</td>
              <td>{{$funcionario->apellido}}</td>
              <td>{{($funcionario->sexo == 'm')? 'Masculino':'Femenino'}}</td>
              <td>{{$funcionario->direccion}}</td>
              <td>{{$funcionario->telefono}}</td>
              <td>{{$funcionario->email}}</td>
              <td>{{$funcionario->cargo}}</td>
              <td>{{$funcionario->departamento}}</td>
              <td>{{$funcionario->usuarios->usuario}}</td>
              <td>
                <a href="/funcionario/{{$funcionario->cedula}}/editar" class="button tiny radius secondary">MODIFICAR</a>
                <a href="/funcionario/{{$funcionario->cedula}}/eliminar" class="button tiny radius alert">ELIMINAR</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      @if(count($funcionarios)>=10)

        {{$funcionarios->links() }}

      @endif

    </div>
  </div>
</div>
</div>
@endsection