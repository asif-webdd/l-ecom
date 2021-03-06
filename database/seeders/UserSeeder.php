<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        User::create([
            'name' => $faker->name,
            'email' => 'admin@gmail.com',
            'image'=> $faker->image,
            'password' => Hash::make('12345678'),
            'status' => 1,
            'permissions' => json_encode(["*"])
        ]);

        foreach (range(1, 10) as $index){
            User::create([
                'name' => $faker->firstName,
                'email' => $faker->unique()->email,
                'password' => Hash::make('123456'),
                'status' => cat_rand_status(),
                'image'=> $faker->image,
                'permissions' => json_encode([1,2])
            ]);
        }
    }
}
