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
            'name' => 'Gustavo Jofre',
            'email' => 'Gustavojofreaguilera@gmail.com',
            'password'=> bcrypt('SRTadmin01'),
        ])->assignRole('Admin');

    }
}
