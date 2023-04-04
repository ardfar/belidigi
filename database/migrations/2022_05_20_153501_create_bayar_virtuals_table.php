<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayarVirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_virtuals', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('email');
            $table->string('hp')->nullable();
            $table->string('jenisTransaksi')->default('bayar-virtual');
            $table->string('jenisVA');
            $table->string('noVA');
            $table->string('pemilikVA');
            $table->string('jumlahBayar');
            $table->string('kodeUnik');
            $table->string('totalBayar');
            $table->string('metodeBayar');
            $table->smallInteger('sudahBayar')->default('0');
            $table->string('statusProses')->default('WAITING');
            $table->string('fileBukti')->nullable();
            $table->text('sebab')->nullable();
            $table->text('sebabTolak')->nullable();
            $table->string('accessCode');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('bayar_virtuals');
    }
}
