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
            $table->unsignedInteger('id_pelanggan');
            $table->primary('id_pelanggan');
            $table->integer('faktor_meter');
            $table->string('nama', 50);
            $table->string('npwp', 15)->nullable();
            $table->string('telepon', 15)->nullable();

            $table->tinyinteger('id_unit')->unsigned();
            $table->foreign('id_unit')->nullable()->references('id_unit')->on('unit')->onDelete('cascade');
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
