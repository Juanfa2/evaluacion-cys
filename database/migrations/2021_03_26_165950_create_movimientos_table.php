<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad");
            $table->date("fecha");
            $table->unsignedBigInteger("id_articulo");
            $table->unsignedBigInteger("id_tipo");
            $table->foreign("id_articulo")->references("id")->on("articulos");
            $table->foreign("id_tipo")->references("id")->on("tipo_movimiento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
