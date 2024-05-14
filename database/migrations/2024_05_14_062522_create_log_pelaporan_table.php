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
        Schema::create('log_pelaporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('status_log_pelaporan', 191);
            $table->unsignedBigInteger('pelaporan_id');
            $table->text('keterangan_log');
            $table->string('foto', 191)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pelaporan_id')->references('id')->on('pelaporan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('log_pelaporan');
    }
};