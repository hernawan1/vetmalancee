<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_user');
            $table->string('gambar');
            $table->integer('harga');
            $table->string('dosis');
            $table->string('satuan_isi');
            $table->string('jenis_kategori');
            $table->string('wadah');
            $table->string('indikasi');
            $table->string('deskripsi');
            $table->float('rasio_sedang');
            $table->float('rasio_besar');
            $table->float('rasio_kecil');
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
        Schema::dropIfExists('produk');
    }
}
