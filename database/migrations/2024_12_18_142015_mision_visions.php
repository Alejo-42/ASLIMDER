<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MisionVisions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mision_visions', function(Blueprint $table){
            $table->id();
            $table->text('texto');
            $table->text('url');
            $table->enum('status',['ACTIVATE','DESACTIVATE'])->default('ACTIVATE');
            //$table->unsignedBigInteger('imagenes_id');
            //$table->foreign('imagenes_id')->references('id')->on('imagenes');
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
        Schema::dropIfExists('mision_visions');
    }
}
