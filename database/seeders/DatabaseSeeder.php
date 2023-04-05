<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ville;
use App\Models\Etudiant;
use Faker\Factory as FakerFactory;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        Ville::factory()->count(10)->create();

        Etudiant::factory()->count(100)->create([
            'ville_id' => function () {
                return Ville::all()->random()->id;
            },
        ]);    

    }
}


