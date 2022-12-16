<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('deskripsi_produk')->nullable();
            $table->integer('jumlah_pembelian')->nullable();
            $table->integer('total_harga')->nullable();
            $table->integer('id_transaksi')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pembayarans');
    }
}
