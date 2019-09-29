<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_cate', function (Blueprint $table) {
            $table->bigInteger('pro_id')->unsigned();
            $table->bigInteger('cate_id')->unsigned();
            $table->foreign('pro_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
            $table->foreign('cate_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('pro_cate');
    }
}
