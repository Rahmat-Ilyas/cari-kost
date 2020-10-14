<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kosts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('nama_kost');
            $table->string('tipe_kost');
            $table->string('jangkawaktu');
            $table->string('harga_kost');
            $table->string('luas_kamar');
            $table->string('fasilitas');
            $table->string('lokasi_kost');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('deksripsi');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('status');
            $table->timestamps();

            //relasi
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kosts');
    }
}
