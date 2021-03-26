<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Inventario;
use App\Models\Movimiento;
use App\Models\Tipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $articulo = Articulo::all()->random(1)->first();
        $tipo = Tipo::all()->random(1)->first();
        return [
            'cantidad' => $this->faker->randomFloat($nbMaxDecimals = 0, $min = 100, $max = 4000),
            'fecha' => $this->faker->date(),
            'id_articulo' => $articulo->id,
            'id_tipo' => $tipo->id

        ];
    }
}
