<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeliPulsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_pulsas', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('hp');
            $table->string('email')->nullable();
            $table->string('operator');
            $table->string('jenisTransaksi')->default('beli-pulsa');
            $table->string('jumlahPulsa');
            $table->string('hargaPulsa');
            $table->string('totalBayar');
            $table->string('metodeBayar');
            $table->string('kodeUnik');
            $table->smallInteger('sudahBayar')->default('0');
            $table->string('statusProses')->default('WAITING');
            $table->string('fileBukti')->nullable();
            $table->text('sebab')->nullable();
            $table->text('sebabTolak')->nullable();
            $table->string('accessCode');
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
        Schema::dropIfExists('beli_pulsas');
    }
}
