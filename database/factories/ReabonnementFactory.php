<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReabonnementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' =>$this->faker->uuid,
            'emplacement'=>$this->faker->words(2), 
            'remarque' => $this->faker->name(),
            'formule' =>$this->faker->word,
            'delais' =>$this->faker->randomDigitNotZero(),
            'jour' => $this->faker->datetime,
            'periode' =>$this->faker->randomDigitNotZero() + "mois",
            'type' => $this->faker->word,
        ];
    }
}
