<?php

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
        DB::table('admins')->insert([
            'name' => 'Nguyen A D',
            'email' => 'nguyen@gmail.com',
            'password' => bcrypt('123456789'),
            'remember_token' => Str::random(10)
        ]);
    }
}
