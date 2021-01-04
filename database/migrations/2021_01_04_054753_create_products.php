<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('category_id');
            // $table->unsignedBigInteger('brand_id');
            $table->string('name');
            $table->string('price')->default("");
            $table->timestamps();
        //   $table->foreign('category_id')->references('id')->on('categories');
        //   $table->foreign('brand_id')->references('id')->on('brands');
           $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
           $table->foreignId('brand_id')->constrained();
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
