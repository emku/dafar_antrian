<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntrianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('antrians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_loket')->unsigned();
            $table->foreign('id_loket')->references('id_loket')->on('lokets');
            $table->integer('nomor_antrian');
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
        Schema::dropIfExists('tb_antrian');
    }
}
