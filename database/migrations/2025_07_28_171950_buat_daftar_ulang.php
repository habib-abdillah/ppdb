<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_ulang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftar_id')->constrained('pendaftars')->onDelete('cascade')->index();
            $table->enum('status_verifikasi', ['belum', 'diverifikasi', 'ditolak'])->default('belum');
            $table->text('catatan')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->timestamps();
        });

        Schema::create('data_pribadi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_data_pribadi_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('nama');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->string('nik_siswa');
            $table->string('kk');
            $table->unsignedTinyInteger('anak_ke');
            $table->unsignedTinyInteger('saudara');
            $table->string('status_keluarga');
            $table->string('bahasa');
            $table->string('status_anak');
            $table->timestamps();
        });

        Schema::create('alamat_kontak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_alamat_kontak_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->text('alamat');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('hp_siswa')->nullable();
            $table->string('hp_ortu');
            $table->timestamps();
        });

        Schema::create('orang_tua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_orang_tua_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('nik_ayah');
            $table->string('ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('nik_ibu');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('wali')->nullable();
            $table->string('hubungan_wali')->nullable();
            $table->string('hp_wali')->nullable();
            $table->timestamps();
        });

        Schema::create('sekolah_asal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_sekolah_asal_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('jenjang_asal');
            $table->string('sekolah_asal');
            $table->string('status_sekolah');
            $table->string('alamat_sekolah');
            $table->string('tahun_lulus');
            $table->string('npsn')->nullable();
            $table->timestamps();
        });

        Schema::create('status_santri', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_status_santri_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('status_santri');
            $table->date('tanggal_masuk');
            $table->string('kamar')->nullable();
            $table->string('lembaga');
            $table->string('hafalan_terakhir')->nullable();
            $table->string('rekomendasi_jurusan')->nullable();
            $table->timestamps();
        });

        Schema::create('informasi_tambahan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_informasi_tambahan_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('agama');
            $table->string('status_tempat_tinggal');
            $table->decimal('jarak', 5, 2);
            $table->string('transportasi');
            $table->string('no_kip')->nullable();
            $table->string('no_pkh')->nullable();
            $table->text('riwayat_penyakit')->nullable();
            $table->string('alergi')->nullable();
            $table->string('ukuran_baju')->nullable();
            $table->string('ukuran_celana')->nullable();
            $table->string('ukuran_jilbab')->nullable();
            $table->timestamps();
        });

        Schema::create('dokumen_daftar_ulang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daftar_ulang_id');
            $table->foreign('daftar_ulang_id', 'fk_dokumen_du')
                ->references('id')->on('daftar_ulang')
                ->onDelete('cascade');
            $table->string('foto');
            $table->string('kk');
            $table->string('akte');
            $table->string('ijazah')->nullable();
            $table->string('ktp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_daftar_ulang');
        Schema::dropIfExists('informasi_tambahan');
        Schema::dropIfExists('status_santri');
        Schema::dropIfExists('sekolah_asal');
        Schema::dropIfExists('orang_tua');
        Schema::dropIfExists('alamat_kontak');
        Schema::dropIfExists('data_pribadi');
        Schema::dropIfExists('daftar_ulang');
    }
};
