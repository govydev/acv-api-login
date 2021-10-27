<?php

namespace Database\Factories;

use App\Models\Tratar;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tratar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idlibro' => $this->faker->numberBetween(1, 10),
            'idtema' => $this->faker->numberBetween(1, 10),
        ];
    }
}
