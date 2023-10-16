<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParamsTable extends Migration
{
public function up()
{
Schema::create('params', function (Blueprint $table) {
$table->id();
$table->string('memory')->default(null);
$table->string('display')->default(null);
$table->string('ram')->default(null);
$table->string('battery')->default(null);
$table->string('model')->default(null);
$table->string('sim')->default(null);
$table->string('refreshRate')->default(null);
$table->string('color')->default(null);
$table->string('processor')->default(null);
$table->string('connection')->default(null);
$table->string('displayType')->default(null);
$table->boolean('nfc')->default(null);
$table->string('processorModel')->default(null);
$table->boolean('isRecommended')->default(null);
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('params');
}
}
