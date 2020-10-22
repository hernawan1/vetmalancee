<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_pelanggan');
            $table->integer('id_produk_pelanggan');
            $table->string('faktur_pesanan');
            $table->date('tanggal_pesanan');
            $table->string('alamat_pesanan');
            $table->string('metode_pengiriman_pesanan');
            $table->integer('total_akhir');
            $table->integer('biaya_pengemasan');
            $table->integer('biaya_ongkir');
            $table->integer('grand_total');
            $table->string('status_pesanan');
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
        Schema::dropIfExists('pesanan');
    }
}
