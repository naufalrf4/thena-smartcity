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
        Schema::create('master_provinsi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 191);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('master_provinsi');
    }
};