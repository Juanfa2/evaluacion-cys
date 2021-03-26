<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{

    public $table = "inventario";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    public function articulos(){
        return $this->hasMany(Articulo::class, 'id_inventario');
    }
}
