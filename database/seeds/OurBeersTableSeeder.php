<?php

use Illuminate\Database\Seeder;

class OurBeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('our_beers')->insert([
            'name' => 'Imperial Stout',
            'description' => 'description for Imperial',
            'abv' => 5.5,
            'ibus' => 40,
            'image' => 'stout.png'
        ]);

        DB::table('our_beers')->insert([
            'name' => 'IPA',
            'description' => 'description for IPA',
            'abv' => 6,
            'ibus' => 70,
            'image' => 'light-lager.png'
        ]);

        DB::table('our_beers')->insert([
            'name' => 'Irish Red',
            'description' => 'description for Irish',
            'abv' => 4.6,
            'ibus' => 25,
            'image' => 'lager-beer-glass-red.png'
        ]);

        DB::table('our_beers')->insert([
            'name' => 'Imperial Stout 2',
            'description' => 'description for Imperial',
            'abv' => 5.5,
            'ibus' => 40,
            'image' => 'stout.png'
        ]);

        DB::table('our_beers')->insert([
            'name' => 'IPA 2',
            'description' => 'description for IPA',
            'abv' => 6,
            'ibus' => 70,
            'image' => 'light-lager.png'
        ]);

        DB::table('our_beers')->insert([
            'name' => 'Irish Red 2',
            'description' => 'description for Irish',
            'abv' => 4.6,
            'ibus' => 25,
            'image' => 'lager-beer-glass-red.png'
        ]);          

    }
}
