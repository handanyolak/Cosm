<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Handan Yolak',
            'password' => bcrypt('123123'),
            'email' => 'handanyolak@gmail.com',
            'email_verified_at' => now(),
        ]);
    }
}
