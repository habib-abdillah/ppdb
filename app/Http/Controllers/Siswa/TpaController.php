<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendaftar;
use App\Models\Gelombang;

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
}
