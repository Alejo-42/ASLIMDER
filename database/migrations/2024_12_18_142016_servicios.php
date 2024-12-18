<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function(Blueprint $table){
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->text('servicioURL');
            $table->enum('status',['ACTIVATE','DESACTIVATE'])->default('ACTIVATE');
            /*$table->unsignedBigInteger('imagenes_id');
            $table->foreign('imagenes_id')->references('id')->on('imagenes');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');*/
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
        Schema::dropIfExists('servicios');
    }
}
