<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'admin',
            'username' => 'admin',
            'password' => '$2y$10$h8EJidupDPCE3CpuK6g81eq0VB2SeX0AZuCsQNjg00dae22wsPIDi'
        ]);
    }
}
