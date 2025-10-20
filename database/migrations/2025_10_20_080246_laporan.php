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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan')->primary();
            $table->string('foro');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('id_user');
            $table->string('id_petugas');
            $table->string('nama');
            $table->string('telp');
            $table->string('jenis');
            $table->string('tanggal');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
