<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run() {
        $faker = Faker\Factory::create();
    
        for($i = 0; $i < 1000; $i++) {
            App\Sinhvien::create([                
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
