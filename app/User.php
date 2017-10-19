<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario',
        'password',
        'funcionario_Cedula',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'usuarios';

    public function funcionario()
    {
        //return $this->belongsTo(funcionarios::class, 'cedula', 'funcionarios_Cedula');
        return $this->belongsTo(funcionarios::class, 'funcionario_Cedula', 'cedula');
    }

    
}
