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
        Schema::create('propertis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_id');
            $table->foreignId('tipe_properti_id');
            $table->string('nama_properti');
            $table->string('nama_developer');
            $table->string('cicilan');
            $table->string('featured_image');
            $table->string('deskripsi_properti');
            $table->string('fasilitas');
            $table->string('deskripsi_lokasi');
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
        Schema::dropIfExists('propertis');
    }
};
