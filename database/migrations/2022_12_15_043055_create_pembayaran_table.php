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
            $table->engine = 'InnoDB';
            $table->unsignedbigInteger('id_pembayaran');
            $table->primary('id_pembayaran');
            $table->date('tanggal_bayar');
            $table->double('total_bayar');

            $table->foreignId('id_tagihan')->references('id_tagihan')->on('tagihan')->onDelete('cascade');
            $table->foreignId('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->foreignId('id_kwhmeter')->references('id_kwhmeter')->on('kwhmeter')->onDelete('cascade');
            $table->foreignId('id_user')->references('id_user')->on('user')->onDelete('cascade');
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
