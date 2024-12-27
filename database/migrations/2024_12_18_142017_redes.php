<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Redes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redes', function(Blueprint $table){
            $table->id();
            $table->string('title');//nombre
            $table->string('icon');//icono 
            $table->text('link');//link red social
            $table->enum('status',['ACTIVATE','DESACTIVATE'])->default('ACTIVATE');
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
        Schema::dropIfExists('redes');
    }
}
