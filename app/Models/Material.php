<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materiales';

    protected $fillable = [

        'nombre',
        'precio',
        'descripcion',
        'idCategoria',

    ];

    public function categoria(){

        return $this->hasOne( Categoria::class, 'id', 'idCategoria');
        
    }
}
