<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    //
    
    public function usuarios()
    {
        //return $this->hasOne(usuarios::class, 'Cedula', 'funcionario_Cedula');
        return $this->hasOne(usuarios::class, 'usuario', 'funcionario_Cedula');
        //return $this->hasOne(usuarios::class, 'funcionario_Cedula', 'usuario');
        //return $this->hasOne(usuarios::class, 'funcionario_Cedula');
    }

    protected $fillable = [
        'cedula', 'email', 'nombre', 'apellido', 'sexo', 'telefono', 'direccion', 'cargo', 'departamento',
    ];
    
}
