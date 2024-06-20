<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('umkm_id');
            $table->string('day');
            $table->time('open');
            $table->time('close');
            $table->string('located');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umkm_avalabilities');
    }
};
