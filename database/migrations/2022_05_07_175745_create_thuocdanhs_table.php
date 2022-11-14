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
        Schema::create('thuocdanhs', function (Blueprint $table) {
            $table->id();
            $table->integer('truyen_id')->unsigned();
            $table->integer('danhmuc_id')->unsigned();
           
            $table->foreign('truyen_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('danhmuc_id')->references('id')->on('dmtruyens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuocdanhs');
    }
};
