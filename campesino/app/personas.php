<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{

    public function solicitudes()
    {
        return $this->hasMany(solicitudes::class, 'persona_Cedula', 'cedula');
    }
}
