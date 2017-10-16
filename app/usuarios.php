<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;


class usuarios extends Model
{
    // return $this->belongsTo('App\User', 'foreign_key', 'other_key');
    public function funcionario()
    {
        //return $this->belongsTo(funcionarios::class, 'cedula', 'funcionarios_Cedula');
        return $this->belongsTo(funcionarios::class, 'funcionario_Cedula', 'cedula');
    }

}



			 