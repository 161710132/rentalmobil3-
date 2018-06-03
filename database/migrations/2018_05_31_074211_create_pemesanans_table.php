<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_pemesanan');
            $table->date('tanggal_pengembalian');
            $table->UnsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->ondelete('cascade');

            $table->UnsignedInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobils')->ondelete('cascade');

            $table->UnsignedInteger('supir_id');
            $table->foreign('supir_id')->references('id')->on('supirs')->ondelete('cascade');
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
        Schema::dropIfExists('pemesanans');
    }
}
