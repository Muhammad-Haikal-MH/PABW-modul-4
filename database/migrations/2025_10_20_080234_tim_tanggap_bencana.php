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
        Schema::create('tim_tanggap_bencana', function (Blueprint $table) {
            $table->id('id_tim')->primary();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('wilayhu_tugas');
            $table->string('jumlah_anggota');
            $table->string('id_petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_tanggap_bencana');
    }
};
