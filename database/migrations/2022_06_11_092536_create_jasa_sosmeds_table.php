<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJasaSosmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasa_sosmeds', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('nama');
            $table->string('creator')->nullable();
            $table->string('username');
            $table->string('email');
            $table->string('hp')->nullable();
            $table->string('jenisTransaksi')->default('jasa-sosmed');
            $table->string('kodeProduk');
            $table->string('jenisLayanan');
            $table->string('hargaLayanan');
            $table->integer('jumlahJasa');
            $table->longText('kustomKomentar')->nullable();
            $table->longText('linkPost')->nullable();
            $table->string('totalBayar');
            $table->string('metodeBayar');
            $table->string('kodeUnik');
            $table->smallInteger('sudahBayar')->default('0');
            $table->string('statusProses')->default('WAITING');
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
        Schema::dropIfExists('jasa_sosmeds');
    }
}
