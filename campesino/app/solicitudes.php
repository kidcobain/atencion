<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    //
    public function persona()
    {
        return $this->belongsTo(personas::class, 'persona_Cedula', 'cedula');
    }

    public function funcionario()
    {
        return $this->hasOne(funcionarios::class, 'cedula', 'funcionario_Cedula');
    }
	
}
