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
            @foreach( $usuarios as $usuario )

              
            <tr>
              <td>
                <a href="/persona/{{$usuario->funcionario->cedula}}">
                  {{$usuario->funcionario->cedula}}
                </a>
                
              </td>
              <td>{{$usuario->funcionario->nombre}}</td>
              <td>{{$usuario->funcionario->apellido}}</td>
              <td>{{($usuario->funcionario->sexo == 'm')? 'Masculino':'Femenino'}}</td>
              <td>{{$usuario->funcionario->direccion}}</td>
              <td>{{$usuario->funcionario->telefono}}</td>
              <td>{{$usuario->funcionario->email}}</td>
              <td>{{$usuario->funcionario->cargo}}</td>
              <td>{{$usuario->funcionario->departamento}}</td>
              <td>{{$usuario->usuario}}</td>
              <td>
                <a href="#" class="button tiny radius secondary">MODIFICAR</a>
                <a href="/persona/{{$usuario->cedula}}/eliminar" class="button tiny radius alert">ELIMINAR</a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
      @if(count($usuario)>10)

        {{--$usuario->links() --}}

      @endif

    </div>
  </div>
</div>
</div>
@endsection