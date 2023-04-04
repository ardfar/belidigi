<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralPurchaseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_purchase_infos', function (Blueprint $table) {
            $table->id();
            $table->string('idTransaksi');
            $table->string('jenisTransaksi');
            $table->string('creator')->nullable();
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->string('totalBayar');
            $table->string('metodeBayar');
            $table->smallInteger('sudahBayar')->default(0);
            $table->string('status')->default('WAITING');
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
        Schema::dropIfExists('general_purchase_infos');
    }
}
