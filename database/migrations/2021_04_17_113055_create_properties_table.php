<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('quart');
            $table->integer('area');
            $table->integer('registered_area');
            $table->string('window_type');
            $table->integer('water_outlets');
            $table->integer('bathrooms');
            $table->integer('badrooms');
            $table->integer('rooms');
            $table->integer('flors');
            $table->integer('at_flor');
            $table->integer('year');
            $table->text('description');
            $table->text('additional_info');
            $table->integer('price');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
