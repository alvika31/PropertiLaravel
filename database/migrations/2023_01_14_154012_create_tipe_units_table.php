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
        Schema::create('tipe_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->string('image_tipe');
            $table->string('nama_tipe');
            $table->integer('harga');
            $table->integer('kamar_tidur');
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
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
        Schema::dropIfExists('tipe_units');
    }
};
