<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPaket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kategori',false,true);
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_fitur',false,true);
            $table->foreign('id_fitur')->references('id_fitur')->on('fitur')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('paket');
    }
}
