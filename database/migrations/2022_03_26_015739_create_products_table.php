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
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name_product');
            $table->string('img_product');
            $table->text('slug_product');
            $table->text('content_product');
            $table->string('kichhoat');
            $table->string('hot');
            $table->string('tinhtrang');
            $table->string('view_product')->nullable();
            $table->integer('id_author')->unsigned();
            // $table->integer('id_publishing')->unsigned();//!tạm khoá
            $table->integer('theloai_id')->unsigned();
            $table->integer('danhmuc_id')->unsigned();
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
        Schema::dropIfExists('products');
    }
};
