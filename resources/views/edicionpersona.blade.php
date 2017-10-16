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
                            <label for="cedula" class="col-md-4 control-label">* Cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="number" class="form-control" name="cedula" value="{{ $persona->cedula or old('cedula') }}" required autofocus>

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
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $persona->nombre or old('nombre') }}" required autofocus>

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
                                <input id="apellido" type="text" class="form-control" name="apellido" value="{{ $persona->apellido or old('apellido') }}" required autofocus>

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

                                <option value="m" {{ old('sexo', $persona->sexo) == "m" ? 'selected' : '' }}>
                                  Masculino
                                </option>

                                <option value="f" {{ old('sexo', $persona->sexo) == "f" ? 'selected' : '' }}>
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
                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">* Tipo</label>

                            <div class="col-md-6">
                                <select class="form-control" id="tipo" class="form-control" name="tipo"  required autofocus>
                                    <option value="">seleccione una opcion</option>
                                    <option value="natural" 
                                    {{ old('tipo', $persona->tipo) == "natural" ? 'selected' : '' }}>
                                        Natural
                                    </option>
                                    <option value="juridica"
                                     {{ old('tipo', $persona->tipo) ==  "juridica" ? 'selected' : '' }}>
                                        Juridica
                                    </option>
                                </select>

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
                            <label for="rif" class="col-md-4 control-label">** Rif</label>

                            <div class="col-md-6">
                                <input id="rif" type="text" class="form-control" name="rif" value="{{ $persona->rif or old('rif') }}" required autofocus>

                                @if ($errors->has('rif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('representante') ? ' has-error' : '' }}">
                            <label for="representante" class="col-md-4 control-label">** Representante</label>

                            <div class="col-md-6">
                                <input id="representante" type="text" class="form-control" name="representante" value="{{ $persona->representante or old('representante') }}" required autofocus>

                                @if ($errors->has('representante'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representante') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nivel_educativo') ? ' has-error' : '' }}">
                            <label for="nivel_educativo" class="col-md-4 control-label">* Nivel educativo</label>

                            <div class="col-md-6">
                                <select class="form-control" id="nivel_educativo" class="form-control" name="nivel_educativo" value="{{ $persona->nivel_educativo or old('nivel_educativo') }}" required autofocus>
                                  <option value="">seleccione una opcion</option>
                                  <option value="primaria"
                                   {{ old('nivel_educativo', $persona->nivel_educativo) ==  "primaria" ? 'selected' : '' }}>
                               primaria
                                </option>
                                  <option value="secundaria"
                                   {{ old('nivel_educativo', $persona->nivel_educativo) ==  "secundaria" ? 'selected' : '' }}>
                               secundaria
                                </option>
                                  <option value="bachiderato"
                                   {{ old('nivel_educativo', $persona->nivel_educativo) ==  "bachiderato" ? 'selected' : '' }}>
                               bachiderato
                                </option>
                                  <option value="tsu"
                                   {{ old('nivel_educativo', $persona->nivel_educativo) ==  "tsu" ? 'selected' : '' }}>
                               tsu
                                </option>
                                  <option value="universitario"
                                   {{ old('nivel_educativo', $persona->nivel_educativo) ==  "universitario" ? 'selected' : '' }}>
                               universitario
                                </option>
                                </select>
                                
                                @if ($errors->has('nivel_educativo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nivel_educativo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('municipio') ? ' has-error' : '' }}">
                            <label for="municipio" class="col-md-4 control-label">* Municipio</label>

                            <div class="col-md-6">
                                <select class="form-control" id="municipio" class="form-control" name="municipio" value="{{ $persona->municipio or old('municipio') }}" required autofocus>
                                  <option value="">seleccione una opcion</option>
                                  <option value="caroni"> Caroní </option>
                                  <option value="cedeno"> Cedeño </option>
                                  <option value="callao"> El Callao </option>
                                  <option value="gran sabana"> Gran Sabana </option>
                                  <option value="heres"> Heres </option>
                                  <option value="padrepedrochien"> Padre Pedro Chien </option>
                                  <option value="piar"> Piar </option>
                                  <option value="angostura"> Angostura (Raúl Leoni) </option>
                                  <option value="roscio"> Roscio </option>
                                  <option value="sifontes"> Sifontes </option>
                                  <option value="sucre"> Sucre </option>
                                </select>

                                @if ($errors->has('municipio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('municipio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('parroquia') ? ' has-error' : '' }}">
                            <label for="parroquia" class="col-md-4 control-label">* Parroquia</label>

                            <div class="col-md-6">
                                <input id="parroquia" type="text" class="form-control" name="parroquia" value="{{ $persona->parroquia or old('parroquia') }}" required autofocus>

                                @if ($errors->has('parroquia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parroquia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">* Sector</label>

                            <div class="col-md-6">
                                <input id="sector" type="text" class="form-control" name="sector" value="{{ $persona->sector or old('sector') }}" required autofocus>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">* Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ $persona->direccion or old('direccion') }}" required autofocus>

                                @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('unidad_produccion') ? ' has-error' : '' }}">
                            <label for="unidad_produccion" class="col-md-4 control-label">* Unidad de produccion</label>

                            <div class="col-md-6">
                                <input id="unidad_produccion" type="text" class="form-control" name="unidad_produccion" value="{{ $persona->unidad_produccion or old('unidad_produccion') }}" required autofocus>

                                @if ($errors->has('unidad_produccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unidad_produccion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('organizacion') ? ' has-error' : '' }}">
                            <label for="organizacion" class="col-md-4 control-label">* Organizacion</label>

                            <div class="col-md-6">
                                <input id="organizacion" type="text" class="form-control" name="organizacion" value="{{ $persona->organizacion or old('organizacion') }}" required autofocus>

                                @if ($errors->has('organizacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organizacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">* Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ $persona->telefono or old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $persona->email or old('email') }}" required autofocus>

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
                        <p>* Los campos marcados con * son requisito obligatorio para el registro</p>
                        <p>** Los campos marcados con ** son requisito obligatorio para el registro de persona juridica</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
