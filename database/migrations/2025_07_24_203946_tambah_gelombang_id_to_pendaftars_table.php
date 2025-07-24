<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tambah kolom gelombang_id ke tabel pendaftar.
     */
    public function up(): void
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            if (!Schema::hasColumn('pendaftar', 'gelombang_id')) {
                $table->foreignId('gelombang_id')
                    ->nullable()
                    ->constrained('gelombang')
                    ->onDelete('set null')->after('asal_sekolah');
            }
        });
    }

    public function down(): void
    {
        Schema::table('pendaftars', function (Blueprint $table) {
            $table->dropForeign(['gelombang_id']);
            $table->dropColumn('gelombang_id');
        });
    }
};
