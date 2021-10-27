<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('name_section');
            $table->string('title');
            $table->string('desc');
            $table->string('image-1');
            $table->string('titleimage-1');
            $table->string('image-2');
            $table->string('titleimage-2');
            $table->string('image-3');
            $table->string('titleimage-3');
            $table->string('image-4');
            $table->string('titleimage-4');
            $table->string('image-5');
            $table->string('titleimage-5');
            $table->string('image-6');
            $table->string('titleimage-6');
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
        Schema::dropIfExists('galleries');
    }
}
