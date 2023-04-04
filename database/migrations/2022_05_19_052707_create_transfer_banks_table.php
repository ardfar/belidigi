<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_banks', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('email');
            $table->string('hp')->nullable();
            $table->string('jenisTransaksi')->default('transfer-bank');
            $table->string('bankTujuan');
            $table->string('rekTujuan');
            $table->string('pemilikTujuan');
            $table->string('jumlahTransfer');
            $table->string('kodeUnik');
            $table->string('totalBayar');
            $table->string('biayaAdmin')->default('500');
            $table->string('metodeBayar');
            $table->smallInteger('sudahBayar')->default('0');
            $table->string('statusProses')->default('WAITING');
            $table->string('fileBukti')->nullable();
            $table->text('sebab')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('transfer_banks');
    }
}
