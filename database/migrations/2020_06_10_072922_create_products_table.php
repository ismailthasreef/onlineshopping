<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('p_id');
            $table->integer('cat_id');
            $table->string('p_name');
            $table->string('p_code');
            $table->string('p_description');
            $table->text('p_image');
            $table->boolean('p_is_active');
            $table->string('p_meta_title');
            $table->string('p_meta_keyword');
            $table->string('cat_meta_des');
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
}
