<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejarahChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarah_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sejarah_id');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->string('src_foto');
            $table->timestamps();

            $table->index('sejarah_id');
            $table->foreign('sejarah_id')->references('id')->on('sejarahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarah_children');
    }
}
