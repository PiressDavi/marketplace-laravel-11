<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Davi Pires',
                'username' => 'dps',
                'email' => 'piress.davi@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedor@teste.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
            ],            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'cliente@teste.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ],
        ]);
    }
}
