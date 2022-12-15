<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwhmeterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwhmeter', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id_kwhmeter');
            $table->primary('id_kwhmeter');
            $table->char('bulan', 2);
            $table->char('tahun', 4);
            $table->double('meter_awal');
            $table->double('meter_akhir');
            $table->date('tanggal_catat');

            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kwhmeter');
    }
}
