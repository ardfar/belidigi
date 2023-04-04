<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpenMSGSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_m_s_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('idPesan');
            $table->string('nama');
            $table->string('email');
            $table->string('hp');
            $table->longText('pesan');
            $table->string('status')->default('CREATED');
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
        Schema::dropIfExists('open_m_s_g_s');
    }
}
