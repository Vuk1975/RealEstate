<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->timestamps();

            $table->primary(['property_id', 'tag_id']);

            $table->foreign('property_id')
            ->references('id')->on('properties')
            ->onDelete('cascade');

            $table->foreign('tag_id')
            ->references('id')->on('tags')
            ->onDelete('cascade');;
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_tag');
    }
}
