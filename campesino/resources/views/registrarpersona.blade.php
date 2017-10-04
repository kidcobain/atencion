@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar solicitud</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/persona/registrar">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                            <label for="sexo" class="col-md-4 control-label">sexo</label>

                            <div class="col-md-6">
                                <input id="sexo" type="text" class="form-control" name="sexo" value="{{ old('sexo') }}" required autofocus>

                                @if ($errors->has('sexo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ old('tipo') }}" required autofocus>

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
                            <label for="rif" class="col-md-4 control-label">rif</label>

                            <div class="col-md-6">
                                <input id="rif" type="text" class="form-control" name="rif" value="{{ old('rif') }}" required autofocus>

                                @if ($errors->has('rif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nivel_educativo') ? ' has-error' : '' }}">
                            <label for="nivel_educativo" class="col-md-4 control-label">nivel_educativo</label>

                            <div class="col-md-6">
                                <input id="nivel_educativo" type="text" class="form-control" name="nivel_educativo" value="{{ old('nivel_educativo') }}" required autofocus>

                                @if ($errors->has('nivel_educativo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nivel_educativo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('municipio') ? ' has-error' : '' }}">
                            <label for="municipio" class="col-md-4 control-label">municipio</label>

                            <div class="col-md-6">
                                <input id="municipio" type="text" class="form-control" name="municipio" value="{{ old('municipio') }}" required autofocus>

                                @if ($errors->has('municipio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('parroquia') ? ' has-error' : '' }}">
                            <label for="parroquia" class="col-md-4 control-label">parroquia</label>

                            <div class="col-md-6">
                                <input id="parroquia" type="text" class="form-control" name="parroquia" value="{{ old('parroquia') }}" required autofocus>

                                @if ($errors->has('parroquia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parroquia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">sector</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control" name="sector" value="{{ old('sector') }}" required autofocus>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('unidad_produccion') ? ' has-error' : '' }}">
                            <label for="unidad_produccion" class="col-md-4 control-label">unidad_produccion</label>

                            <div class="col-md-6">
                                <input id="unidad_produccion" type="text" class="form-control" name="unidad_produccion" value="{{ old('unidad_produccion') }}" required autofocus>

                                @if ($errors->has('unidad_produccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unidad_produccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('organizacion') ? ' has-error' : '' }}">
                            <label for="organizacion" class="col-md-4 control-label">organizacion</label>

                            <div class="col-md-6">
                                <input id="organizacion" type="text" class="form-control" name="organizacion" value="{{ old('organizacion') }}" required autofocus>

                                @if ($errors->has('organizacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organizacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
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
