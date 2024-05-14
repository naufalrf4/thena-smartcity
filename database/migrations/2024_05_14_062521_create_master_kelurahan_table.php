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
        Schema::create('master_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 191);
            $table->unsignedBigInteger('district_id');
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('master_kecamatan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_kelurahan');
    }
};
