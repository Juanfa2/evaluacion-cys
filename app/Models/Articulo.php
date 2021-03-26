<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    public $table = "articulos";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'descripcion', 'ubicacion', 'id_inventario'
    ];

    public function movimientos(){
        return $this->hasMany(Movimiento::class, 'id_articulo');
    }
}
