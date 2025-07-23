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
        Schema::create('daftar_ulang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained()->onDelete('cascade');
            $table->string('alamat_lengkap')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('foto_diri')->nullable();
            $table->string('kk')->nullable(); // kartu keluarga
            $table->string('akte')->nullable();
            $table->string('rapor')->nullable();
            $table->enum('status_verifikasi', ['belum', 'diverifikasi', 'ditolak'])->default('belum');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_ulang');
    }
};
