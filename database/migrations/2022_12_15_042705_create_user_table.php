<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedbigInteger('id_user');
            $table->primary('id_user');
            $table->char('username',20);
            $table->char('password',20);
            $table->char('status',10);

            $table->foreignId('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
