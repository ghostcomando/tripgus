<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTouristicPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('touristic_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('price');
            $table->string('image');
            $table->integer('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('touristic_plans');
    }
}
