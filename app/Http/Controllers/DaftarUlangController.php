<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DaftarUlang;

class DaftarUlangController extends Controller
{
    public function index(Request $request)
    {
        $pendaftar = Pendaftar::where('user_id', Auth::id())->first();
        $daftarUlang = DaftarUlang::with([
            'dataPribadi',
            'alamatKontak',
            'orangTua',
            'sekolahAsal',
            'statusSantri',
            'informasiTambahan',
            'dokumenDaftarUlang',
        ])->where('pendaftar_id', $pendaftar->id)->first();

        $step = (int) $request->input('step', 1);

        return view('siswa.daftarulang.daftar', compact('pendaftar', 'daftarUlang', 'step'));
    }

    public function store(Request $request)
    {
        $pendaftar = Pendaftar::where('user_id', auth()->id())->firstOrFail();
        $step = (int) $request->input('step', 1);
        $draft = filter_var($request->input('draft', true), FILTER_VALIDATE_BOOLEAN); // pastikan boolean

        $daftarUlang = DaftarUlang::updateOrCreate(
            ['pendaftar_id' => $pendaftar->id],
            ['status_verifikasi' => 'belum']
        );

        match ($step) {
            1 => $this->simpanStep1($request, $daftarUlang),
            2 => $this->simpanStep2($request, $daftarUlang),
            3 => $this->simpanStep3($request, $daftarUlang),
            4 => $this->simpanStep4($request, $daftarUlang),
            5 => $this->simpanStep5($request, $daftarUlang),
            6 => $this->simpanStep6($request, $daftarUlang),
            7 => $this->simpanStep7($request, $daftarUlang),
            8 => $this->simpanStep8($request, $daftarUlang),
            default => null,
        };

        if ($draft) {
            return back()->with('success', 'Data disimpan sebagai draft.');
        }

        // Jika sudah step terakhir (8), redirect ke halaman selesai
        if ($step === 8) {
            // return redirect()->route('daftar-ulang.selesai')->with('success', 'Formulir berhasil dikirim.');
            return redirect()->route('siswa.du')->with('success', 'Data berhasil disimpan.');
        }

        // Redirect ke step selanjutnya
        return redirect()->route('siswa.du', ['step' => $step + 1])
            ->with('success', 'Data berhasil disimpan.');
    }


    protected function simpanStep1(Request $request, $daftarUlang)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jk' => 'required|in:L,P',
            'nik_siswa' => 'required',
            'kk' => 'required',
            'anak_ke' => 'required|integer',
            'saudara' => 'required|integer',
            'status_keluarga' => 'required',
            'bahasa' => 'required',
            'status_anak' => 'required',
        ]);

        $daftarUlang->dataPribadi()->updateOrCreate([], $validated);
    }

    protected function simpanStep2(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'alamat'     => 'required|string',
            'desa'       => 'required|string',
            'kecamatan'  => 'required|string',
            'kabupaten'  => 'required|string',
            'provinsi'   => 'required|string',
            'kode_pos'   => 'required|string',
            'hp_siswa'   => 'nullable|string',
            'hp_ortu'    => 'required|string',
        ]);

        $daftarUlang->alamatKontak()->updateOrCreate([], $validated);
    }

    protected function simpanStep3(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'nik_ayah'         => 'required|string',
            'ayah'             => 'required|string',
            'pekerjaan_ayah'   => 'required|string',
            'pendidikan_ayah'  => 'required|string',
            'penghasilan_ayah' => 'required|string',
            'nik_ibu'          => 'required|string',
            'ibu'              => 'required|string',
            'pekerjaan_ibu'    => 'required|string',
            'pendidikan_ibu'   => 'required|string',
            'penghasilan_ibu'  => 'required|string',
            'wali'             => 'nullable|string',
            'hubungan_wali'    => 'nullable|string',
            'hp_wali'          => 'nullable|string',
        ]);

        $daftarUlang->orangTua()->updateOrCreate([], $validated);
    }

    protected function simpanStep4(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'jenjang_asal'    => 'required|string',
            'sekolah_asal'    => 'required|string',
            'status_sekolah'  => 'required|string',
            'alamat_sekolah'  => 'required|string',
            'tahun_lulus'     => 'required|string',
            'npsn'            => 'nullable|string',
        ]);

        $daftarUlang->sekolahAsal()->updateOrCreate([], $validated);
    }

    protected function simpanStep5(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'status_santri'        => 'required|string',
            'tanggal_masuk'        => 'required|date',
            'kamar'                => 'nullable|string',
            'lembaga'              => 'required|string',
            'hafalan_terakhir'     => 'nullable|string',
            'rekomendasi_jurusan'  => 'nullable|string',
        ]);

        $daftarUlang->statusSantri()->updateOrCreate([], $validated);
    }

    protected function simpanStep6(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'agama'                  => 'required|string',
            'status_tempat_tinggal'  => 'required|string',
            'jarak'                  => 'required|numeric',
            'transportasi'           => 'required|string',
            'no_kip'                 => 'nullable|string',
            'no_pkh'                 => 'nullable|string',
            'riwayat_penyakit'       => 'nullable|string',
            'alergi'                 => 'nullable|string',
            'ukuran_baju'            => 'nullable|string',
            'ukuran_celana'          => 'nullable|string',
            'ukuran_jilbab'          => 'nullable|string',
        ]);

        $daftarUlang->informasiTambahan()->updateOrCreate([], $validated);
    }

    protected function simpanStep7(Request $request, DaftarUlang $daftarUlang)
    {
        $validated = $request->validate([
            'foto'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'kk_file'     => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'akta_file'   => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ijazah_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'ktp_file'    => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $existing = $daftarUlang->dokumenDaftarUlang;
        $storage = \Storage::disk('public');

        $data = [];

        $fileFields = [
            'foto'        => 'foto',
            'kk_file'     => 'kk',
            'akta_file'   => 'akte',
            'ijazah_file' => 'ijazah',
            'ktp_file'    => 'ktp',
        ];

        foreach ($fileFields as $input => $fieldName) {
            if ($request->hasFile($input)) {
                if ($existing && $existing->{$fieldName}) {
                    $storage->delete($existing->{$fieldName});
                }

                $file = $request->file($input);
                $filename = time() . '_' . preg_replace('/\s+/', '_', $file->getClientOriginalName());
                $data[$fieldName] = $file->storeAs("dokumen/{$fieldName}", $filename, 'public');
            } else {
                $data[$fieldName] = $existing->{$fieldName} ?? null;
            }
        }

        $daftarUlang->dokumenDaftarUlang()->updateOrCreate([], $data);
    }

    protected function simpanStep8(Request $request, DaftarUlang $daftarUlang)
    {
        if (! filter_var($request->input('draft'), FILTER_VALIDATE_BOOLEAN)) {
            $daftarUlang->update([
                'status_verifikasi' => 'belum',
                'is_complete' => true,
            ]);
        }
    }
}
