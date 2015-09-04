<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_beers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('style', 20);
            $table->mediumText('description');
            $table->float('abv');
            $table->integer('ibus');
            $table->string('image', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('our_beers');
    }
}
