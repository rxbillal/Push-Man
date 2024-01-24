<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(['id' => 1],[
            'name'              => 'Mr. Admin',
            'email'             => 'admin@gmail.com',
            'is_admin'          => 1,
            'email_verified_at' => today(),
            'password'          => bcrypt('password'),
        ]);
    }
}
