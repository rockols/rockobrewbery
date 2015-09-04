<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adress', 20);
            $table->string('city', 20);
            $table->string('country',20);
            $table->string('phone');
            $table->string('email');
            $table->mediumText('about');
            $table->string('twiter', 20);
            $table->string('facebook', 20);
            $table->string('google', 20);
            $table->string('pinterest', 20);
            $table->string('dribbble', 20);
            $table->string('vimeo', 20);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configurations');
    }
}
