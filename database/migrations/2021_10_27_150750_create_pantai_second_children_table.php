<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantaiSecondChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantai_second_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pantai_children_id');
            $table->string('src_foto');
            $table->timestamps();

            $table->index('pantai_children_id');
            $table->foreign('pantai_children_id')->references('id')->on('pantai_children')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pantai_second_children');
    }
}
