<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    public $table = "movimientos";
    public $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'nombre' , 'fecha', 'id_articulo', 'id_tipos', 'cantidad'
    ];

    public function tipo(){
        return $this->belongsTo(Tipo::class, 'id_tipo');
    }

}
