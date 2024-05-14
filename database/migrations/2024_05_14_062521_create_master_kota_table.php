<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('master_kota', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 191);
            $table->unsignedBigInteger('province_id');
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('master_provinsi')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_kota');
    }
};