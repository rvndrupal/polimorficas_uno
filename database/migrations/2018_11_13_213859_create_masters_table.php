<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('nosotros');
            $table->string('noso_titulo');
            $table->string('noso_descri');
            $table->string('b1');
            $table->string('b2');
            $table->string('b3');
            $table->string('b4');
            $table->string('b5');
            $table->string('b6');
            $table->string('b7');
            $table->string('b8');
            $table->string('b9');
            $table->string('b10');
            $table->string('b11');
            $table->string('b12');
            $table->string('b13');
            

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
        Schema::dropIfExists('masters');
    }
}
