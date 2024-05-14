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
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_penanganan_id')->default(1);
            $table->string('lat_coor', 255)->nullable();
            $table->string('lng_coor', 255)->nullable();
            $table->string('foto', 191)->nullable();
            $table->string('nama_laporan', 191);
            $table->unsignedBigInteger('role_penanganan_id')->nullable();
            $table->text('deskripsi_laporan');
            $table->string('alamat_kejadian', 191);
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->timestamp('tgl_dibuat')->default(now());
            $table->timestamp('estimasi_selesai')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_penanganan_id')->references('id')->on('status_penanganan');
            $table->foreign('role_penanganan_id')->references('id')->on('roles');
            $table->foreign('kecamatan_id')->references('id')->on('master_kecamatan');
            $table->foreign('kelurahan_id')->references('id')->on('master_kelurahan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelaporan');
    }
};