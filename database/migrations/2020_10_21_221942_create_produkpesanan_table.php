<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukpesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkpesanan', function (Blueprint $table) {
            $table->id('id');
            $table->string('gambar_produk');
            $table->string('nama_produk');
            $table->integer('harga_produk');
            $table->integer('jumlah_produk');
            $table->integer('total_harga');
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
        Schema::dropIfExists('produkpesanan');
    }
}
