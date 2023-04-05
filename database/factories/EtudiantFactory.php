<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
   
    {
   
        static $count = 1;
        return [
            'nom' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'address' => $this->faker->streetAddress(),
            'phone' => $this->faker->phoneNumber('+1514#######'),
            'email' => $this->faker->unique()->safeEmail,
            'dob' => $this->faker->dateTimeBetween('-35 years', 'now')->format('Y-m-d'),
            'ville_id' => Ville::factory(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d H:i:s'),
            'student_id'=> $count++,
        ];
    }
}

