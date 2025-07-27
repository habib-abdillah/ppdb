<?php

namespace App\Http\Controllers\Siswa;

use App\Models\TpaHasil;
use App\Models\Gelombang;
use App\Models\Pendaftar;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TpaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $semuaGelombang = Gelombang::all();
        $pendaftar = Pendaftar::with(['gelombang', 'tpaAkses'])
            ->where('user_id', $user->id)
            ->firstOrFail();

        return view('siswa.tpa.info', [
            'pendaftar'       => $pendaftar,
            'tpaAkses'        => $pendaftar->tpaAkses,
            'semuaGelombang'  => $semuaGelombang,
        ]);
    }

    public function hasil()
    {
        $user = auth()->user();

        if (!$user->pendaftar) {
            return redirect()->back()->with('error', 'Data pendaftar tidak ditemukan.');
        }

        $hasil = $user->pendaftar->tpaHasil;

        if (!$hasil) {
            return redirect()->back()->with('error', 'Data hasil TPA belum tersedia.');
        }

        $hasil->load('subtes.master');

        return view('siswa.tpa.hasil', compact('hasil'));
    }
}
