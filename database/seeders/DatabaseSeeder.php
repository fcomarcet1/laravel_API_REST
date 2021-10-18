<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Plane;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use App\Models\Manufacturer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        //Model::unguard();
        $faker = Faker::create();

        User::factory()->times(1)->create([
            'name' => 'Fco',
            'email' => 'fcomarcet1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt("secret"),
            'remember_token' => Str::random(10),
            

        ]);
        User::factory()->times(1)->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt("admin"),
            'remember_token' => Str::random(10),

        ]);

        Manufacturer::factory()->times(10)->create();
        Plane::factory()->times(25)->create();
        //User::factory()->times(25)->create();
    }
}
