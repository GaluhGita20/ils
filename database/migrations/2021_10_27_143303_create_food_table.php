<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('title');      
            $table->string('image-1');
            $table->string('title-1');
            $table->string('desc-1');
            $table->string('video-2');
            $table->string('titlevideo-2');
            $table->string('desc-2');
            $table->string('video-3');
            $table->string('titlevideo-3');
            $table->string('desc-3');
            $table->string('video-4');
            $table->string('titlevideo-4');
            $table->string('desc-4');
            $table->string('video-5');
            $table->string('titlevideo-5');
            $table->string('desc-5');
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
        Schema::dropIfExists('food');
    }
}
