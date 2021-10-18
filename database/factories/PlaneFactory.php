<?php

namespace Database\Factories;

use App\Models\Manufacturer;
use App\Models\Plane;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plane::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //$countManufacturers= Manufacturer::all()->count();
        // manufacturer_id	model	length	capacity	speed	autonomy

        return [
            'manufacturer_id' =>Manufacturer::all()->random()->id,
            'model' => $this->faker->word(),
            'length' => $this->faker->randomFloat(2,10,150),
            'capacity' => $this->faker->randomNumber(3),  // de 3 dígitos como máximo.
            'speed' => $this->faker->randomNumber(4),  // de 4 dígitos como máximo.
            'autonomy' => $this->faker->randomNumber(),
        ];
    }
}
