<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelaporan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('status_penanganan_id')->constrained('status_penanganan');
            $table->string('foto')->nullable();
            $table->string('nama_laporan');
            $table->foreignId('role_penanganan_id')->constrained('roles');
            $table->text('deskripsi_laporan');
            $table->string('alamat_kejadian');
            $table->foreignId('kecamatan_id')->constrained('master_kecamatan');
            $table->foreignId('kelurahan_id')->constrained('master_kelurahan');
            $table->timestamp('tgl_dibuat')->useCurrent();
            $table->timestamp('estimasi_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporann');
    }
};
