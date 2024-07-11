<?php

namespace App\Http\Controllers;

use App\Models\BuktiSetoranZakat;
use Illuminate\Http\Request;
use App\Models\Penyetor;
use App\Models\PembayaranZakat;
use Illuminate\Support\Facades\Storage;

class ZakatController extends Controller
{
    public function index()//menampilkan view home
    {
        return view('home');
    }

    public function FormPerhitungan()//menampilkan view kalkulator
    {
        return view('template.kalkulator');
    }

    public function Perhitungan(Request $request)//memperoses data form kalkulator
    {
        $total_harta = $request->input('total_harta');
        $nishab = 82312725; // Nominal Nishab

        if ($total_harta < $nishab) {
            return redirect('/perhitungan-zakat')
                ->with('message', 'Penghasilan Anda belum mencapai nishab. Anda tetap bisa menyempurnakan niat baik dengan bersedekah.')
                ->withInput();
        }

        $zakat = $total_harta * 0.025;//matematika

        return view('template.hasilPerhitungan', ['zakat' => $zakat]);
    }

    public function FormPembayaran()//menampilkan view bayar
    {
        return view('bayar');
    }

    public function pembayaran(Request $request)// memperoses form bayar
    {
        //Validasi input
        $data = $request->validate([
            'jenis_dana' => 'required',
            'nominal' => 'required|numeric',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_hp' => 'required|regex:/^[0-9]+$/',
            'email' => 'required|email|unique:tabel_penyetor,email',
        ]);

        $penyetor = Penyetor::updateOrCreate(
            ['email' => $data['email']],
            ['nama' => $data['nama'], 'jenis_kelamin' => $data['jenis_kelamin'], 'no_hp' => $data['no_hp']]
        );

        $pembayaranZakat = PembayaranZakat::create([
            'penyetor_id' => $penyetor->id,
            'jenis_dana' => $data['jenis_dana'],
            'nominal' => $data['nominal']
        ]);

        $bsz = "BSZ" . str_pad($pembayaranZakat->id, 8, '0', STR_PAD_LEFT);//membuat nomor tiket pembayaran zakat

        return redirect()->route('hasilPembayaran', $pembayaranZakat->id);
    }

    public function info()// menampilkan view info
    {
        return view('info');
    }

    public function FormBank()// menampilkan view bank
    {
        return view('bank');
    }

    // public function viewAdmin()// menampilkan view admin
    // {
    //     return view('admindash.admin');
    // }

    public function hasilPembayaran($id)// menampilkan tiket pembayaran
    {
        $pembayaranZakat = PembayaranZakat::findOrFail($id);
        $bsz = "BSZ" . str_pad($pembayaranZakat->id, 8, '0', STR_PAD_LEFT);
        
        $whatsappMessage = "Terima kasih telah membayar zakat. Berikut adalah Tiket Pembayaran Zakat Anda: " . $bsz;
        $whatsappUrl = "https://wa.me/628117489991?text=" . urlencode($whatsappMessage);
        
        return view('hasilPembayaran', ['pembayaranZakat' => $pembayaranZakat, 'bsz' => $bsz, 'whatsappUrl' => $whatsappUrl]);
    }
}
