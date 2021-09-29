<?php

namespace Database\Factories;

use App\Models\TypeEnseignement;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeEnseignementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeEnseignement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'libelle' => $this->faker->sentence(5),
            'code' => $this->faker->text(5),
            'image' => $this->faker->imageUrl(500,500,'png'),
            'description' => $this->faker->paragraph(5),
            'description_full' => $this->faker->paragraph(10)
        ];
    }
}
