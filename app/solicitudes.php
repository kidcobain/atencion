<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class solicitudes extends Model
{
    //
    public function persona()
    {
        return $this->belongsTo(personas::class, 'persona_Cedula', 'cedula');
    }

    protected $fillable = [
        'lugar', 'tipo', 'solicitud', 'observaciones', 'fundo', 'persona_Cedula', 'funcionario_Cedula', ];

    public function funcionario()
    {
        return $this->hasOne(funcionarios::class, 'cedula', 'funcionario_Cedula');
    }

        use SoftDeletes;

        protected $dates = ['deleted_at'];
	
}
