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
        Schema::create('tpa_hasil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained()->onDelete('cascade');
            $table->integer('nilai')->nullable();
            $table->integer('persentil')->nullable();
            $table->string('rekomendasi_jurusan')->nullable();
            $table->integer('kesesuaian_pplg')->nullable();
            $table->integer('kesesuaian_dkv')->nullable();
            $table->text('catatan')->nullable();
            $table->enum('status', ['belum', 'proses', 'selesai'])->default('belum');
            $table->date('tanggal_tes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpa_hasil');
    }
};
