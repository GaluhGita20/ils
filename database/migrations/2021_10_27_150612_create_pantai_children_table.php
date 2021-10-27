<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantaiChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantai_children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pantai_id');
            $table->string('judul');
            $table->longText('deskripsi');
            $table->timestamps();

            $table->index('pantai_id');
            $table->foreign('pantai_id')->references('id')->on('pantais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('pantai_children', function (Blueprint $table) {
            $table->dropForeign(['pantai_id']);
            $table->dropColumn('pantai_id');
        });
        Schema::dropIfExists('pantai_children');
    }
}
