<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Movimiento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(InventarioSeeder::class);
        $this->call(TipoMovimientoSeeder::class);
        Articulo::factory(10)->create();
        Movimiento::factory(30)->create();

    }
}
