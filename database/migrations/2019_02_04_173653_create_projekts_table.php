<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjektsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projekts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nev');
            $table->string('leiras');
            $table->string('statusz');
            $table->string('kapcsolattarto');
            $table->string('kapcsMail');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projekts');
    }
}
