<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model

{

    public $table = "tipo_movimiento";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre'
    ];

    public function tipos_movimientos(){
        return $this->hasMany(Movimiento::class, 'id_tipo');
    }
}
