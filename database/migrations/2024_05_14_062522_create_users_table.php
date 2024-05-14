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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email', 191)->unique();
            $table->string('password', 191);
            $table->string('name', 191);
            $table->string('foto_profil')->nullable();
            $table->string('username', 191)->unique();
            $table->string('no_telp', 191);
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->string('rt', 191);
            $table->string('rw', 191);
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('kecamatan_id')->references('id')->on('master_kecamatan');
            $table->foreign('kelurahan_id')->references('id')->on('master_kelurahan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};