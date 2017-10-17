<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    //

    protected $primaryKey = 'cedula';
    
    public function usuarios()
    {
        //return $this->hasOne(usuarios::class, 'Cedula', 'funcionario_Cedula');
        //return $this->hasOne(User::class, 'usuario', 'funcionario_Cedula');
        //return $this->hasOne(User::class, 'cedula', 'funcionario_Cedula');
        return $this->hasOne(User::class, 'funcionario_Cedula', 'cedula');
        //return $this->hasOne(usuarios::class, 'funcionario_Cedula', 'usuario');
        //return $this->hasOne(usuarios::class, 'funcionario_Cedula');
    }

    public function solicitudes()
    {
        return $this->hasMany(solicitudes::class, 'funcionario_Cedula', 'cedula');
    }

    protected $fillable = [
        'cedula',
        'email',
        'nombre', 
        'apellido', 
        'sexo', 
        'telefono', 
        'direccion', 
        'cargo', 
        'departamento',
    ];


    
}
