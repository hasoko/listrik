<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigInteger('id_pembayaran');
            $table->date('tanggal_bayar');
            $table->double('total_bayar');

            $table->foreign('id_tagihan')->references('id_tagihan')->on('tagihan');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan');
            $table->foreign('id_kwh')->references('id_kwh')->on('kwhmeter');
            $table->foreign('id_user')->references('id_user')->on('user');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
