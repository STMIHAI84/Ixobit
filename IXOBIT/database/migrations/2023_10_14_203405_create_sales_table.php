<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client')->default(null);
            $table->foreign('id_client')->references('id')->on('clients')->default(null);
            $table->unsignedBigInteger('id_produs')->default(null);
            $table->foreign('id_produs')->references('id')->on('products');
            $table->date('data_cumpararii')->default(null);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
