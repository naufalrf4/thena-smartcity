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
        Schema::create('status_penanganan', function (Blueprint $table) {
            $table->id();
            $table->string('status', 191);
            $table->string('color', 25);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_penanganan');
    }
};
