<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nomor_nota');
            $table->string('jumlah_barang');
            $table->integer('harga_barang');
            $table->integer('harga_barang');
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
        Schema::dropIfExists('table_barang_masuk');
    }
}
