<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('desc');
            $table->string('video-1');
            $table->string('titlevideo-1');
            $table->string('video-2');
            $table->string('titlevideo-2');
            $table->string('video-3');
            $table->string('titlevideo-3');
            $table->string('video-4');
            $table->string('titlevideo-4');
            $table->string('video-5');
            $table->string('titlevideo-5');
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
        Schema::dropIfExists('our_videos');
    }
}
