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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained()->onDelete('cascade');
            $table->enum('jenis', ['tpa', 'daftar_ulang']);
            $table->integer('jumlah')->nullable(); // nominal (jika ada)
            $table->string('metode')->nullable(); // transfer / tunai / lainnya
            $table->string('bukti')->nullable(); // path bukti transfer
            $table->enum('status', ['belum', 'pending', 'diverifikasi', 'ditolak'])->default('belum');
            $table->text('catatan')->nullable();
            $table->timestamp('tanggal_dibayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
