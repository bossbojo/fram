<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'username' => 'admin',
                'role' => 'admin',
                'fullName' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
            ]);
    }
}
