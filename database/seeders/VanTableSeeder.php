<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Van;

class VanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {

            $van = new Van();
            $van -> brand = $faker -> company();
            $van -> fuel = $faker -> randomElement(["benzina", "diesel", "metano", "elettrico"]);
            $van -> color = $faker -> randomElement(["nero", "bianco", "grigio", "rosso", "blu"]);

            $van -> save();
        }
    }
}
