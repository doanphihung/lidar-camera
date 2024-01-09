<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Giam-doc',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('Jvb@987654321'),
                'role' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bao-ve',
                'email' => 'baove@gmail.com',
                'username' => 'guard',
                'password' => Hash::make('Jvb@987654321'),
                'role' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
    
}
