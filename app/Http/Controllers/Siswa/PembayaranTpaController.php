<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PembayaranTpaController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        $pembayaran = Pembayaran::where('pendaftar_id', $pendaftar->id)->where('jenis', 'TPA')->first();

        return view('siswa.pembayaran.tpa', compact('pendaftar', 'pembayaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'metode' => 'required|string',
            'jumlah' => 'required|numeric|min:1000',
            'bukti'  => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);


        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();

        $path = $request->file('bukti')->store('bukti_pembayaran', 'public');

        // Cek apakah sudah pernah upload sebelumnya
        $pembayaran = Pembayaran::updateOrCreate(
            ['pendaftar_id' => $pendaftar->id, 'jenis' => 'TPA'],
            [
                'bukti' => $path,
                'status' => 'pending', // default status
                'catatan' => null,
                'tanggal_dibayar' => now(),
            ]
        );

        return redirect()->back()->with('success', 'Bukti pembayaran berhasil dikirim.');
    }
}
