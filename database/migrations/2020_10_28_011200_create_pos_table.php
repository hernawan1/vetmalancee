<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos', function (Blueprint $table) {
            $table->id('id');
            $table->integer('nama_pelanggan');
            $table->integer('id_produk_pelanggan');
            $table->string('faktur_pesanan');
            $table->date('tanggal_pesanan');
            $table->integer('total_akhir');
            $table->integer('biaya_pengemasan');
            $table->integer('biaya_ongkir');
            $table->integer('grand_total');
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
        Schema::dropIfExists('pos');
    }
}
