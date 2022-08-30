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
        Schema::create('tbl_brand_product', function (Blueprint $table) {
            $table->Increments('brand_id');
            $table->string('brand_name');
            $table->text('brand_desc');
            //$table->string('brand_origin');
            $table->integer('brand_status');
            $table->timestamps();//lấy ngày hiện tại tạo table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_brand_product');
    }
};