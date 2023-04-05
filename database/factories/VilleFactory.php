<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ville>
 */
class VilleFactory extends Factory
{
    protected $model = Ville::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $count = 1;

        return [
            'nom' => $this->faker->city(),
            'created_at' => now(),
            'updated_at' => now(),
            'id' => $count++,
        ];
    }
}
        

        






