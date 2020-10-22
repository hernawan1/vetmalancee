<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_pesanan');
            $table->date('tanggal');
            $table->string('alamat');
            $table->string('metode_pengiriman');
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
        Schema::dropIfExists('riwayat');
    }
}
