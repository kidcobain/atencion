@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar funcionario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/funcionario/{{ $funcionario->cedula }}/editar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">* Cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" onKeyPress="return soloNumeros(event)" class="form-control" name="cedula" value=" {{ $funcionario->cedula or old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">* Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $funcionario->nombre or old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">* Apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ $funcionario->apellido or old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="sexo" class="col-md-4 control-label">* Sexo</label>

                            <div class="col-md-6">
                                <select class="form-control" id="sexo" class="form-control" name="sexo" required autofocus>

                                <option value="">seleccione una opcion</option>

                                <option value="m" {{ old('sexo', $funcionario->sexo) == "m" ? 'selected' : '' }}>
                                  Masculino
                                </option>

                                <option value="f" {{ old('sexo', $funcionario->sexo) == "f" ? 'selected' : '' }}>
                                  Femenino
                                </option>
                                </select>

                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                            <label for="departamento" class="col-md-4 control-label">* Departamento</label>

                            <div class="col-md-6">

                                <select class="form-control" id="departamento" class="form-control" name="departamento" value="{{ old('departamento') }}" required autofocus>
                                  <option value="">seleccione una opcion</option>
                                  <option value="tecnica" {{ old('departamento', $funcionario->departamento) == "tecnica" ? 'selected' : '' }}>Tecnica</option>
                                  <option value="area legal"{{ old('departamento', $funcionario->departamento) == "area legal" ? 'selected' : '' }}>Area legal</option>
                                  <option value="coordinacion general"{{ old('departamento', $funcionario->departamento) == "coordinacion general" ? 'selected' : '' }}>Coordinacion general</option>
                                  <option value="atencion al campesino"{{ old('departamento', $funcionario->departamento) == "atencion al campesino" ? 'selected' : '' }}>Atención al campesino</option>
                                </select>

                                @if ($errors->has('departamento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('departamento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                            <label for="cargo" class="col-md-4 control-label">* Cargo</label>

                            <div class="col-md-6">

                                <select class="form-control" id="cargo" class="form-control" name="cargo" value="{{ old('cargo') }}" required autofocus>
                                  <option value="">seleccione una opcion</option>
                                  <option value="analista" {{ old('cargo', $funcionario->cargo) == "analista" ? 'selected' : '' }}>Analista</option>
                                  <option value="jefe de area" {{ old('cargo', $funcionario->cargo) == "jefe de area" ? 'selected' : '' }}>Jefe de area</option>
                                  
                                </select>

                                @if ($errors->has('cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">* Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $funcionario->telefono or old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">* Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $funcionario->direccion or old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                            <label for="usuario" class="col-md-4 control-label">* Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="{{ $funcionario->usuarios->usuario or old('usuario') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">* Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $funcionario->email or old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="button" class="editcontrasenia btn btn-info" value="editar contraseña">

                        <div class="contrasenias" style="display: none;">

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">* Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required disabled="disabled">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">* Confirmar contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required disabled="disabled">
                                </div>
                            </div>

                        </div> 
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>

                    </form>
                    <p>* Los campos marcados con * son requisito obligatorio para el registro</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery-2.1.4.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
    $('.editcontrasenia').click(function(event) {

        $( ".contrasenias" ).toggle( "slow" ).promise().done(function() {
  
        if ($( "#password" ).prop('disabled')){
            $( "#password, #password-confirm" ).prop('disabled', false);

        }
        else{
            $( "#password, #password-confirm" ).prop('disabled', true);

        }
    });

        //$( ".contrasenias :visible" ).hide('slow');
        //$( ".contrasenias :hidden" ).slideDown( "slow" );

    });
});
        
   // $("input").prop('disabled', true);
    //$("input").prop('disabled', false);
</script>
@endsection
