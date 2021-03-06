@extends('layouts.app')

@section('content')
<div class="container">
    {{--dd($solicitudes)--}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar solicitud</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/solicitud/{{$solicitudes->id}}/editar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('lugar') ? ' has-error' : '' }}">
                            <label for="lugar" class="col-md-4 control-label">lugar</label>

                            <div class="col-md-6">
                                <input id="lugar" type="text" class="form-control" name="lugar" value="{{ $solicitudes->lugar or old('lugar') }}" required autofocus>

                                @if ($errors->has('lugar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lugar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{$solicitudes->tipo or old('tipo') }}" required autofocus>

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('solicitud') ? ' has-error' : '' }}">
                            <label for="solicitud" class="col-md-4 control-label">solicitud</label>

                            <div class="col-md-6">
                                <input id="solicitud" type="text" class="form-control" name="solicitud" value="{{ $solicitudes->solicitud or old('solicitud') }}" required autofocus>

                                @if ($errors->has('solicitud'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('solicitud') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('observaciones') ? ' has-error' : '' }}">
                            <label for="observaciones" class="col-md-4 control-label">observaciones</label>

                            <div class="col-md-6">
                                <textarea id="observaciones" rows="3" class="form-control" name="observaciones" required autofocus>{{ $solicitudes->observaciones or old('observaciones') }}</textarea>

                                @if ($errors->has('observaciones'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('observaciones') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('fundo') ? ' has-error' : '' }}">
                            <label for="fundo" class="col-md-4 control-label">fundo</label>

                            <div class="col-md-6">
                                <input id="fundo" type="text" class="form-control" name="fundo" value="{{ $solicitudes->fundo or old('fundo') }}" required autofocus>

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
                                <input id="fecha" type="text" class="form-control" name="fecha" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d', $solicitudes->fecha)->format('d/m/Y') }}" required autofocus>

                                @if ($errors->has('fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('persona_Cedula') ? ' has-error' : '' }}">
                            <label for="persona_Cedula" class="col-md-4 control-label">persona_Cedula</label>

                            <div class="col-md-6">
                                <input id="persona_Cedula" type="text" class="form-control" name="persona_Cedula" value="{{ $solicitudes->persona_Cedula or old('persona_Cedula') }}" required autofocus>

                                @if ($errors->has('persona_Cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('persona_Cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('funcionario_Cedula') ? ' has-error' : '' }}">
                            <label for="funcionario_Cedula" class="col-md-4 control-label">funcionario_Cedula</label>

                            <div class="col-md-6">
                                <input id="funcionario_Cedula" type="text" class="form-control" name="funcionario_Cedula" value="{{ $solicitudes->funcionario_Cedula or old('funcionario_Cedula') }}" required autofocus>

                                @if ($errors->has('funcionario_Cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('funcionario_Cedula') }}</strong>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
