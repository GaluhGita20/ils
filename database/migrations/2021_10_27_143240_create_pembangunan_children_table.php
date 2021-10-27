<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembangunanChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembangunan_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembangunan_id');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->string('src_foto');
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
        Schema::dropIfExists('pembangunan_children');
    }
}
