<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('brand', 50);
            $table->string('type', 50);
            $table->float('alcohol_vol', 3, 1);
            $table->string('fermentation', 50);
            $table->string('color', 50);
            $table->string('taste', 1500);
            $table->string('temperature', 20);
            $table->string('origin', 50);
            $table->smallInteger('year');
            $table->float('price', 5, 2);
            $table->string('image', 2100);
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
        Schema::dropIfExists('beers');
    }
}
