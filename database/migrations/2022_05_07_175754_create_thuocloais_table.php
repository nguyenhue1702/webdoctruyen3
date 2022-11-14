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
        Schema::create('thuocloais', function (Blueprint $table) {
            $table->id();
            $table->integer('truyen_id')->unsigned();
            $table->integer('theloai_id')->unsigned();
            $table->foreign('truyen_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('theloai_id')->references('id')->on('theloais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuocloais');
    }
};
