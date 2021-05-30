<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(User::count() < 1){
            $this->call(UserSeeder::class);
        }
        // \App\Models\User::factory(10)->create();
    }
}
