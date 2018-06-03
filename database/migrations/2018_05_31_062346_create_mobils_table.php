<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('perseneling');
            $table->string('plat_no');
            $table->string('warna');
            $table->string('tahun_keluaran');
            $table->integer('harga');
            $table->integer('stock');
            $table->string('jenis');
            $table->UnsignedInteger('merk_id');
            $table->foreign('merk_id')->references('id')->on('merks')->ondelete('cascade');
            
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
        Schema::dropIfExists('mobils');
    }
}
