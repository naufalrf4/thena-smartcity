<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('no_telp');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles'); // Assuming you have a 'roles' table

            // Foreign Keys
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('master_kecamatan'); // Assuming 'kecamatan' is the related table name

            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('master_kelurahan'); // Assuming 'kelurahan' is the related table name

            $table->string('rt');
            $table->string('rw');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
