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
        Schema::create('tpa_hasil_subtes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tpa_hasil_id')->constrained('tpa_hasil')->onDelete('cascade');
            $table->foreignId('tpa_subtes_master_id')->constrained('tpa_subtes_master')->onDelete('cascade');
            $table->integer('nilai')->nullable();
            $table->string('kategori')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tpa_hasil_subtes');
    }
};
