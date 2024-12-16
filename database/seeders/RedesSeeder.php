<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('redes')->insert([
            'nombre'=>$faker->firstName,
            'icono'=>$faker->name,
            'link'=>$faker->url('facebook.com')
        ]);
    }
}
