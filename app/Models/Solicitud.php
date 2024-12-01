<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $fillable = [

        'tipo',
        'derivacion',
        'falla',
        'prioridad',
        'intervencion',
        'necesidad',
        'cliente',
        'email',
        'domicilio',
        'telefono',
        'ciudad',
        'plan',
        'rut',
        'relato',
        'analisis',
        'idUser',

    ];

    public function usuario(){

        return $this->hasOne( User::class, 'id', 'idUser' );
        
    }
}
