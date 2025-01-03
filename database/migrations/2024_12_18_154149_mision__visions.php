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
        Schema::create('mision__visions', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('image');
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
        Schema::dropIfExists('mision__visions');
    }
}
