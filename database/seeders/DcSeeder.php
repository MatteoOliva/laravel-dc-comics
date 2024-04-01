<?php

namespace Database\Seeders;

use App\Models\Dc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $dc = New Dc;
            $dc->title = $faker->title();
            $dc->description = $faker->paragraph(8);
            $dc->series = $faker->randomElement(['yes', 'not']);
            $dc->earnings = $faker->numberBetween([9999999, 999999999]);
            $dc->save();
        }
    }
}
