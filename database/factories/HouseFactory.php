<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

class HouseFactory extends Factory
{

    protected $model = House::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->name,
            'Price' => random_int(100, 500),
            'Bedrooms' => random_int(1, 10),
            'Bathrooms' => random_int(1, 10),
            'Storeys' => random_int(1, 10),
            'Garages' => random_int(1, 5),
        ];
    }
}
