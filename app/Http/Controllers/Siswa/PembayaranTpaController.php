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
            'bank_tujuan' => 'required|string',
            'nominal'     => 'required|numeric|min:1000',
            'bukti'       => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();

        $path = $request->file('bukti')->store('bukti_pembayaran', 'public');

        Pembayaran::updateOrCreate(
            ['pendaftar_id' => $pendaftar->id, 'jenis' => 'TPA'],
            [
                'metode' => $request->bank_tujuan,
                'jumlah' => $request->nominal,
                'bukti' => $path,
                'status' => 'pending',
                'catatan' => null,
                'tanggal_dibayar' => now(),
            ]
        );

        return redirect()->route('siswa.pembayaran.tpa')->with('success', 'Bukti pembayaran berhasil dikirim.');
    }
}
