<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableNasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('tabungan');
            $table->string('nomor_induk');
            $table->string('status');
            $table->string('kewarganegaraan');
            $table->integer('teller_id',false,true);
            $table->foreign('teller_id')->references('id')->on('teller')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('kantorcabang_id',false,true);
            $table->foreign('kantorcabang_id')->references('id')->on('kantorcabang')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('nasabah');
    }
}
