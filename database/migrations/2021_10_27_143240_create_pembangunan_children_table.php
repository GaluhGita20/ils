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

            $table->index('pembangunan_id');
            $table->foreign('pembangunan_id')->references('id')->on('pembangunans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('pembangunan_children', function (Blueprint $table) {
            $table->dropForeign(['pembangunan_id']);
            $table->dropColumn('pembangunan_id');
        });
        Schema::dropIfExists('pembangunan_children');
    }
}
