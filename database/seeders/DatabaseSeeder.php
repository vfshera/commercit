<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => "Shop Admin",
            'email' => "admin@shopecomm.com",
            'email_verified_at' => now(),
            'password' => Hash::make("123456"),
            ]);
        

       $this->call([
           BrandSeeder::class,
           ProductSeeder::class,
           TagSeeder::class,
           ProductTagSeeder::class,
           CategorySeeder::class,
           ProductCategorySeeder::class,
       ]);


    }
}