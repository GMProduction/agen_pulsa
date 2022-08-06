<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanPulsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_pulsas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('no_hp');
            $table->integer('nominal');
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
        Schema::dropIfExists('penjualan_pulsas');
    }
}
