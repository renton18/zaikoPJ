<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZaikosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productionOrderId');
            $table->string('itemNo');
            $table->string('currentAmount');
            $table->string('updateUserId');
            $table->timestamps();
            $table->unique(['productionOrderId', 'itemNo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zaikos');
    }
}
