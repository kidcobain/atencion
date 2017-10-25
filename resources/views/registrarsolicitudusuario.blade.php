@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar solicitud</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/solicitud/registrar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">
                            <label for="lugar" class="col-md-4 control-label">* Lugar</label>

                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control" name="lugar" value="{{ old('lugar') }}" required autofocus>

                                @if ($errors->has('lugar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lugar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">* Tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ old('tipo') }}" required autofocus>

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('solicitud') ? ' has-error' : '' }}">
                            <label for="solicitud" class="col-md-4 control-label">* Solicitud</label>

                            <div class="col-md-6">
                                <input id="solicitud" type="text" class="form-control" name="solicitud" value="{{ old('solicitud') }}" required autofocus>

                                @if ($errors->has('solicitud'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('solicitud') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('observaciones') ? ' has-error' : '' }}">
                            <label for="observaciones" class="col-md-4 control-label"> Observaciones</label>

                            <div class="col-md-6">
                                <input id="observaciones" type="text" class="form-control" name="observaciones" value="{{ old('observaciones') }}" required autofocus>

                                @if ($errors->has('observaciones'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('observaciones') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fundo') ? ' has-error' : '' }}">
                            <label for="fundo" class="col-md-4 control-label">* Fundo</label>

                            <div class="col-md-6">
                                <input id="fundo" type="text" class="form-control" name="fundo" value="{{ old('fundo') }}" required autofocus>

                                @if ($errors->has('fundo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fundo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fecha" class="col-md-4 control-label">* fecha</label>

                            <div class="col-md-6">
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ (\Carbon\Carbon::now()->format('d/m/Y'))  }}" required autofocus>

                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('persona_Cedula') ? ' has-error' : '' }}">
                            <label for="persona_Cedula" class="col-md-4 control-label">* Persona Cedula</label>

                            <div class="col-md-6">
                                <input id="persona_Cedula" type="text" class="form-control" name="persona Cedula" value="{{ $cedula or old('persona_Cedula') }}" required autofocus >

                                @if ($errors->has('persona_Cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('persona_Cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type=hidden name=cedulapersona id="cedulapersona" value="">

                        <div class="form-group{{ $errors->has('funcionario_Cedula') ? ' has-error' : '' }}">
                            <label for="funcionario_Cedula" class="col-md-4 control-label"> Funcionario Cedula</label>

                            <div class="col-md-6">
                                <input id="funcionario_Cedula" type="text" class="form-control" name="funcionario_Cedula" value="{{ old('funcionario_Cedula') }}" required autofocus>

                                @if ($errors->has('funcionario_Cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('funcionario_Cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type=hidden name=cedulafuncionario id="cedulafuncionario" value="">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        <p>* Los campos marcados con * son requisito obligatorio para el registro</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
<script src="/js/jquery-ui.min.js" type="text/javascript"></script>
<script>
    
    
$( function() {
   
    $( "#funcionario_Cedula" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "/funcionario/autocomplete",
          type: 'get',
          dataType: "json",
          data: {
            nombre: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      minLength: 2,
      select: function( event, ui ) {
        event.preventDefault();
        $('#cedulafuncionario').val(ui.item.value);
        $('#funcionario_Cedula').val(ui.item.label);
      }
      

    });

    $( "#persona_Cedula" ).autocomplete({
      source: function( request, response ) {
        $.ajax( {
          url: "/persona/autocomplete",
          type: 'get',
          dataType: "json",
          data: {
            nombre: request.term
          },
          success: function( data ) {
            response( data );
          }
        });
      },
      minLength: 2,
      select: function( event, ui ) {
        event.preventDefault();
        $('#cedulapersona').val(ui.item.value);
        $('#persona_Cedula').val(ui.item.label);
      }
      

    });
});
  
</script>
@endsection
