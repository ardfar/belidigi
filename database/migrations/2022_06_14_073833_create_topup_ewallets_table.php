<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopupEwalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topup_ewallets', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('email')->default('-');
            $table->string('hp')->default('-');
            $table->string('jenisTransaksi')->default('topup-ewallet');
            $table->string('ewallet');
            $table->string('nominalTopup');
            $table->string('biayaAdmin');
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
        Schema::dropIfExists('topup_ewallets');
    }
}
