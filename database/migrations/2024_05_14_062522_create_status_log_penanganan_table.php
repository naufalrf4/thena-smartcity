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
        Schema::create('status_log_penanganan', function (Blueprint $table) {
            $table->id();
            $table->string('status', 255);
            $table->string('color', 25);
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_log_penanganan');
    }
};