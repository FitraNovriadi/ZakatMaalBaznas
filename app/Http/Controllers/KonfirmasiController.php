<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyetor;
use App\Models\PembayaranZakat;
use App\Models\BuktiSetoranZakat;
use Illuminate\Support\Facades\Storage;

class KonfirmasiController extends Controller
{
    public function formKonfirmasi()
    {
        return view('konfirmasi');
    }

    public function konfirmasi(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'jenis_pembayaran' => 'required|string|in:Zakat,Fitrah',
            'sub_jenis_pembayaran' => 'required|string',
            'email' => 'required|email',
            'tanggal_transfer' => 'required|date',
            'asal_bank' => 'required|string',
            'tujuan_bank' => 'required|string',
            'nominal' => 'required|numeric',
            'catatan' => 'nullable|string',
            'foto_bukti' => 'required|image|max:2048'
        ]);

        $data['foto_bukti'] = $request->file('foto_bukti')->store('bukti_transaksi', 'public');

        $penyetor = Penyetor::firstOrCreate(
            ['email' => $data['email']],
            ['nama' => $data['nama'], 'jenis_kelamin' => $data['jenis_kelamin']]
        );

        $pembayaran = PembayaranZakat::create([
            'penyetor_id' => $penyetor->id,
            'jenis_dana' => $data['jenis_pembayaran'],
            'nominal' => $data['nominal']
        ]);

        BuktiSetoranZakat::create([
            'penyetor_id' => $penyetor->id,
            'pembayaran_id' => $pembayaran->id,
            'nama' => $data['nama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'jenis_pembayaran' => $data['jenis_pembayaran'],
            'sub_jenis_pembayaran' => $data['sub_jenis_pembayaran'],
            'email' => $data['email'],
            'tanggal_transfer' => $data['tanggal_transfer'],
            'asal_bank' => $data['asal_bank'],
            'tujuan_bank' => $data['tujuan_bank'],
            'nominal' => $data['nominal'],
            'catatan' => $data['catatan'],
            'foto_bukti' => $data['foto_bukti']
        ]);

        return redirect('/konfirmasi')->with('message', 'Pembayaran sedang dikonfirmasi, hasil konfirmasi akan kami berikan melalui email.');
    }
}
