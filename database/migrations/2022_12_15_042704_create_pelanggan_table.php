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
            $table->string('npwp',15);
            $table->string('telepon',15);

            $table->foreignId('id_unit')->nullable()->references('id_unit')->on('unit')->onDelete('cascade');


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
