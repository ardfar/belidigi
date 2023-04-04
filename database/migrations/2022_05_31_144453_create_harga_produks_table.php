<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga_produks', function (Blueprint $table) {
            $table->id();
            $table->string('kodeProduk');
            $table->string('namaProduk')->default('-');
            $table->string('grupProduk')->default('-');
            $table->longText('deskripsiProduk')->nullable();
            $table->longText('linkProduk')->nullable();
            $table->string('hargaProduk');
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
        Schema::dropIfExists('harga_produks');
    }
}
