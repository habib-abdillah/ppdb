<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Tampilkan halaman formulir pendaftaran.
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Simpan data pendaftar dan buat akun pengguna baru.
     */
    public function store(Request $permintaan)
    {
        // Validasi data input dari form
        $permintaan->validate([
            'nama_lengkap'       => 'required|string|max:255',
            'tempat_lahir'       => 'required|string|max:100',
            'tanggal_lahir'      => 'required|date',
            'email'              => 'required|email|unique:users,email',
            'no_hp_siswa'        => 'required|string|max:20',
            'no_hp_orang_tua'    => 'required|string|max:20',
            'nisn'               => 'required|string|max:20',
            'asal_sekolah'       => 'required|string|max:150',
            'setuju_syarat'      => 'accepted',
        ]);

        // Buat akun user baru
        $user = User::create([
            'name'     => $permintaan->nama_lengkap,
            'email'    => $permintaan->email,
            'password' => Hash::make($permintaan->no_hp_orang_tua), 
            'role'     => 'siswa', 
        ]);

        // Simpan data ke tabel pendaftar
        Pendaftar::create([
            'user_id'        => $user->id,
            'full_name'      => $permintaan->nama_lengkap,
            'birth_place'    => $permintaan->tempat_lahir,
            'birth_date'     => $permintaan->tanggal_lahir,
            'email'          => $permintaan->email,
            'student_phone'  => $permintaan->no_hp_siswa,
            'parent_phone'   => $permintaan->no_hp_orang_tua,
            'nisn'           => $permintaan->nisn,
            'school_origin'  => $permintaan->asal_sekolah,
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login menggunakan email dan nomor HP orang tua sebagai kata sandi.');
    }
}
