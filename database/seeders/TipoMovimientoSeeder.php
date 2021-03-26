<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_movimiento')->insert([
            'nombre'=> 'Compra'
        ]);
        DB::table('tipo_movimiento')->insert([
            'nombre'=> 'Venta'
        ]);
        DB::table('tipo_movimiento')->insert([
            'nombre'=> 'Recuento'
        ]);

    }
}
