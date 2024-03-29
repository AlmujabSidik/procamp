<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
                         'name' => 'Admin',
                         'email' => 'admin@mail.com',
                         'email_verified_at' => date('Y-m-d', time()),
                         'password' => bcrypt('password'),
                         'is_admin' => true
                     ]);
    }
}
