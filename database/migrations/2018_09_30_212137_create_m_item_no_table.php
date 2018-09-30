<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMItemNoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('itemNo')->unique;
            $table->string('diagramNo');
            $table->string('diagramName');
            $table->string('updateUserId');
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
        Schema::dropIfExists('m_item');
    }
}
