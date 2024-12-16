<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('contactos')->insert([
            'numero_c'=>$faker->phoneNumber,
            'numero'=>$faker->phoneNumber,
            'correo'=>$faker->email
        ]);
    }
}
