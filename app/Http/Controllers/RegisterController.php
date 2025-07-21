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
        $email = $permintaan->email;

        if (User::where('email', $email)->exists()) {
            return redirect()->route('register')->withErrors(['email' => 'Email sudah terdaftar.'])->withInput();
        }
        // Validasi data input dari form
        $permintaan->validate([
            'nama_lengkap'      => 'required|string|max:255',
            'tempat_lahir'      => 'required|string|max:255',
            'tanggal_lahir'     => 'required|date',
            'email'             => 'required|email|unique:pendaftar,email',
            'no_hp_siswa'       => 'required|numeric|digits_between:10,15',
            'no_hp_orang_tua'   => 'required|numeric|digits_between:10,15',
            'nisn'              => 'required|digits:10',
            'asal_sekolah'      => 'required|string|max:255',
            'setuju_syarat'     => 'accepted',
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
            'user_id'       => $user->id,
            'nama_lengkap'  => $permintaan->nama_lengkap,
            'tempat_lahir'  => $permintaan->tempat_lahir,
            'tanggal_lahir' => $permintaan->tanggal_lahir,
            'email'         => $permintaan->email,
            'no_hp_siswa'   => $permintaan->no_hp_siswa,
            'no_hp_ortu'    => $permintaan->no_hp_orang_tua,
            'nisn'          => $permintaan->nisn,
            'asal_sekolah'  => $permintaan->asal_sekolah,
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('register')->with('success', 'Pendaftaran berhasil! Silakan login menggunakan email dan nomor HP orang tua sebagai kata sandi.');
    }
}
