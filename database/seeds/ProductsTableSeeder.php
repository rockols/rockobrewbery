<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_beerCat = DB::table('products_categories')->insertGetId([
            'name' => 'Beer'
        ]);
        $id_beerCat = DB::table('products_categories')->insertGetId([
            'name' => 'Merchandising'
        ]);
        DB::table('products')->insert([
            'name' 		  => 'Six Pack Imperial Stout',
            'description' => 'description for Six Pack Imperial Stout',
            'price' 	  => 5.5,
            'available'	  => true,
            'image' 	  => '6pack.jpg',
            'category_id' =>	$id_beerCat
        ]);

                DB::table('products')->insert([
            'name'        => 'Six Pack Imperial Stout',
            'description' => 'description for Six Pack Imperial Stout',
            'price'       => 5.5,
            'available'   => true,
            'image'       => '6pack.jpg',
            'category_id' =>    $id_beerCat
        ]);

                        DB::table('products')->insert([
            'name'        => 'Six Pack Imperial Stout',
            'description' => 'description for Six Pack Imperial Stout',
            'price'       => 5.5,
            'available'   => true,
            'image'       => '6pack.jpg',
            'category_id' =>    $id_beerCat
        ]);

                                DB::table('products')->insert([
            'name'        => 'Six Pack Imperial Stout',
            'description' => 'description for Six Pack Imperial Stout',
            'price'       => 5.5,
            'available'   => true,
            'image'       => '6pack.jpg',
            'category_id' =>    $id_beerCat
        ]);

                                        DB::table('products')->insert([
            'name'        => 'Six Pack Imperial Stout',
            'description' => 'description for Six Pack Imperial Stout',
            'price'       => 5.5,
            'available'   => true,
            'image'       => '6pack.jpg',
            'category_id' =>    $id_beerCat
        ]);
    }
}
