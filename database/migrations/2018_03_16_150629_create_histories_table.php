<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')->on('barangs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('transaksi_id')->unsigned();
            $table->foreign('transaksi_id')->references('id')->on('transaksis')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('konsumen_id')->unsigned();
            $table->foreign('konsumen_id')->references('id')->on('konsumens')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('jumlah');
            $table->string('aksi');
            $table->date('tanggal');
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
        Schema::dropIfExists('histories');
    }
}
