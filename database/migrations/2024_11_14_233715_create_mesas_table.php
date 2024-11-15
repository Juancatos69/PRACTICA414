<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->string('material', 255);
            $table->string('dimensiones', 255);
            $table->string('estilo', 255);
            $table->string('color', 255);
            $table->timestamps(); 
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
