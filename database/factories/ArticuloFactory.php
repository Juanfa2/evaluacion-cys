<?php

namespace Database\Factories;

use App\Models\Articulo;
use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $inventario = Inventario::all()->random(1)->first();
        return [
            'descripcion' => $this->faker->sentence(10),
            'ubicacion' => $this->faker->sentence(10),
            'id_inventario' => $inventario->id

        ];
    }
}
