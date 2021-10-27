<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Libro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'anyoed' => $this->faker->date('Y_m_d'),
            'lugared' => $this->faker->company(),
            'numed' => $this->faker->randomDigitNotNull(),
            'tipocubierta' => $this->faker->word(),
            'npaginas' => $this->faker->numberBetween(0, 200),
            'nstanteria' => $this->faker->numberBetween(0, 30),
            'nejemplares' => $this->faker->numberBetween(0, 100),
            'observaciones' => $this->faker->realText(),
            'idautor' => $this->faker->randomDigitNotNull(),
        ];
    }
}
