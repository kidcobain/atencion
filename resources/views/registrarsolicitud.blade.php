@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar solicitud</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/solicitud/{$id}/registrar">
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
                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">* Cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('funcionario') ? ' has-error' : '' }}">
                            <label for="funcionario" class="col-md-4 control-label">Funcionario</label>

                            <div class="col-md-6">
                                <input id="funcionario" type="text" class="form-control" name="funcionario" value="{{ old('funcionario') }}" required autofocus>

                                @if ($errors->has('funcionario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('funcionario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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
@endsection
