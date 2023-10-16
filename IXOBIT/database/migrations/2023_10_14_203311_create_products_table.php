<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('barcode');
            $table->unsignedBigInteger('id_brand')->default(null);
            $table->foreign('id_brand')->references('id')->on('brands');
            $table->string('name')->default(null);
            $table->decimal('price', 10, 2)->default(null);
            $table->string('img')->default(null);
            $table->unsignedBigInteger('id_params')->default(null);
            $table->foreign('id_params')->references('id')->on('params');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
