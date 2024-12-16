<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MisionVisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('mision_visions')->insert([
            'mision'=>$faker->text,
            'vision'=>$faker->text
        ]);
    }
}
