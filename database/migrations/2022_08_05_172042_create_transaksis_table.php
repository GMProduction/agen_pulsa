<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('produk_id')->unsigned()->nullable(true);
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->bigInteger('user_id')->unsigned()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('harga');
            $table->dateTime('tanggal')->default(\Illuminate\Support\Carbon::now());
            $table->text('bukti_pembayaran')->default(null)->nullable(true);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('transaksis');
    }
}
