<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AbonneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->firstName,
            'prenom' =>$this->faker->lastName,
            'tel'=>$this->faker->e164PhoneNumber(),
            'tel_whatsapp' =>$this->faker->phoneNumber(),
            'email' =>$this->faker->unique()->safeEmail(),
            'ville' => $this->faker->word,
            'quartier' =>$this->faker->word,
            'langue' =>$this->faker->languageCode(),
        ];
    }
}
