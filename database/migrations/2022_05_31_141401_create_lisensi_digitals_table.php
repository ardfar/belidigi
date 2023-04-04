<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLisensiDigitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lisensi_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('hp')->nullable();
            $table->string('email');
            $table->string('jenisTransaksi')->default('lisensi-digital');
            $table->string('kodeProduk');
            $table->string('jenisLisensi');
            $table->string('hargaLisensi');
            $table->string('totalBayar');
            $table->string('metodeBayar');
            $table->string('kodeUnik');
            $table->smallInteger('sudahBayar')->default('0');
            $table->string('statusProses')->default('WAITING');
            $table->string('kodeLisensi');
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
        Schema::dropIfExists('lisensi_digitals');
    }
}
