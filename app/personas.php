<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{

    public function solicitudes()
    {
        return $this->hasMany(solicitudes::class, 'persona_Cedula', 'cedula');
    }

    protected $fillable = [
        'cedula', 'email', 'nombre', 'apellido', 'sexo', 'telefono', 'tipo', 'rif', 'representante', 'nivel_educativo', 'municipio', 'parroquia', 'sector', 'direccion', 'unidad_produccion', 'organizacion', 
    ];
 }
