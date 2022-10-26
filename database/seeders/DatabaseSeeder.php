<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role_id' => '1',
            'is_admin' => '1'
        ]);

        User::create([
            'name' => 'User',
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'),
            'role_id' => '2',
            'is_admin' => '0'
        ]);


    }
}
