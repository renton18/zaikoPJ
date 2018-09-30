<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTStockHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_stockhistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productionOrderId');
            $table->string('itemNo');
            $table->string('orderCategory');
            $table->integer('amount');
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
        Schema::dropIfExists('t_stockHistory');
    }
}
