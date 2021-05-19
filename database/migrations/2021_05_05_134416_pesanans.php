<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pesanans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('idPesan')->unique();
            $table->bigIncrements('idBarang');
            $table->foreign('idBarang')->references('idBarang')->on('barangs');
            $table->bigIncrements('idMember');
            $table->foreign('idMember')->references('idMember')->on('memberships');
            $table->string('status');
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
        Schema::dropIfExists('pesanans');
    }
}
