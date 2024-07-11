<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyetor;
use App\Models\PembayaranZakat;
use App\Models\BuktiSetoranZakat;
use Illuminate\Support\Facades\Storage;

class KonfirmasiController extends Controller
{
    public function formKonfirmasi() //menampilkan view konfirmasi
    {
        return view('konfirmasi');
    }

    public function konfirmasi(Request $request) //memperoses data form konfirmasi
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'jenis_pembayaran' => 'required|string|in:Zakat',
            'sub_jenis_pembayaran' => 'required|string',
            'email' => 'required|email',
            'tanggal_transfer' => 'required|date',
            'asal_bank' => 'required|string',
            'tujuan_bank' => 'required|string',
            'nominal' => 'required|numeric',
            'catatan' => 'nullable|string',
            'foto_bukti' => 'required|image|max:2048'
        ]);

        $data['foto_bukti'] = $request->file('foto_bukti')->store('bukti_transaksi', 'public');//menyimpan foto kedalam public bukti transaksi

        $penyetor = Penyetor::firstOrCreate(
            ['email' => $data['email']],
            ['nama' => $data['nama'], 'jenis_kelamin' => $data['jenis_kelamin']]
        );

        $pembayaran = PembayaranZakat::create([
            'penyetor_id' => $penyetor->id,
            'jenis_dana' => $data['jenis_pembayaran'],
            'nominal' => $data['nominal']
        ]);

        //menyimpan data konfirmasi
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

        //pesan jika konfirmasi dikirim
        return redirect('/konfirmasi')->with('message', 'Pembayaran sedang dikonfirmasi, hasil konfirmasi akan kami berikan melalui email.');
    }
}
