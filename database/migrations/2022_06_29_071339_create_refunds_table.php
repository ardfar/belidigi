<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('idTerkait');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('platform');
            $table->string('username');
            $table->string('jenisTransaksi')->default('refund');
            $table->string('fileBukti')->nullable();
            $table->string('nominalRefund');
            $table->date('tanggalBayar');
            $table->string('bankTujuan');
            $table->string('noRek');
            $table->string('pemilikRekening');
            $table->string('statusProses')->default('WAITING');
            $table->string('sebab');
            $table->string('sebabTolak')->nullable();
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
        Schema::dropIfExists('refunds');
    }
}
