<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('id_tagihan');
            $table->primary('id_tagihan');
            $table->char('bulan', 2);
            $table->char('tahun', 4);
            $table->double('jumlah_meter');
            $table->double('lwbp');
            $table->double('wbp');
            $table->double('pjudki');
            $table->double('pemeliharaan');
            $table->double('materai');
            $table->string('status',15);

            $table->integer('id_pelanggan')->unsigned();
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');

            $table->integer('id_kwhmeter')->unsigned();
            $table->foreign('id_kwhmeter')->references('id_kwhmeter')->on('kwhmeter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihan');
    }
}
