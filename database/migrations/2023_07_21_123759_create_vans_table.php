<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vans', function (Blueprint $table) {
            $table->id();

            $table->string('brand', 32);
            $table->boolean('used');
            $table->string('image', 255);
            $table->integer('engineCapacity');
            $table->integer('weight');
            $table->string('price', 32);
            $table->string('seat', 2);
            $table->string('fuel', 32);
            $table->string('color', 32);
            $table -> string('model', 10);
            $table -> date('releaseDate');

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
        Schema::dropIfExists('vans');
    }
};
