<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventario')->insert([
            'nombre'=> 'Inventario A'
        ]);
        DB::table('inventario')->insert([
            'nombre'=> 'Inventario B'
        ]);
        DB::table('inventario')->insert([
            'nombre'=> 'Inventario C'
        ]);
    }
}
