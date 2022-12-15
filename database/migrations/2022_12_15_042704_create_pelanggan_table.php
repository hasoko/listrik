<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedbigInteger('id_pelanggan');
            $table->primary('id_pelanggan');
            $table->string('nama',50);
            $table->string('lokasi',100);
            $table->string('foto',20);
            $table->string('npwp',15);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
