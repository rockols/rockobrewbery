<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Lucas',
            'last_name' => 'Riback',
            'email' => 'lucas.riback@gmail.com',
            'password' => bcrypt('secret'),
            'type' => 'admin'
        ]);
    }
}
