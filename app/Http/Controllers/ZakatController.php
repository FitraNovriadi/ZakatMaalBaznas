<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyetor;
use App\Models\PembayaranZakat;
use Illuminate\Support\Facades\Storage;

class ZakatController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function FormPerhitungan()
    {
        return view('template.kalkulator');
    }

    public function Perhitungan(Request $request)
    {
        $total_harta = $request->input('total_harta');
        $nishab = 82312725; // Contoh nilai, sesuaikan dengan kebutuhan

        if ($total_harta < $nishab) {
            return redirect('/perhitungan-zakat')
                ->with('message', 'Penghasilan Anda belum mencapai nishab. Anda tetap bisa menyempurnakan niat baik dengan bersedekah.')
                ->withInput();
        }

        $zakat = $total_harta * 0.025;

        return view('template.hasilPerhitungan', ['zakat' => $zakat]);
    }

    public function FormPembayaran()
    {
        return view('bayar');
    }

    public function pembayaran(Request $request)
    {
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

        // Generate Bukti Setor Zakat (BSZ)
        $bsz = "BSZ" . str_pad($pembayaranZakat->id, 8, '0', STR_PAD_LEFT);

        return redirect()->route('hasilPembayaran', $pembayaranZakat->id);
    }

    public function info()
    {
        return view('info');
    }

    public function FormBank()
    {
        return view('bank');
    }

    public function hasilPembayaran($id)
    {
        $pembayaranZakat = PembayaranZakat::findOrFail($id);
        $bsz = "BSZ" . str_pad($pembayaranZakat->id, 8, '0', STR_PAD_LEFT);
        
        $whatsappMessage = "Terima kasih telah membayar zakat. Berikut adalah Bukti Setor Zakat (BSZ) Anda: " . $bsz;
        $whatsappUrl = "https://wa.me/628990807716?text=" . urlencode($whatsappMessage);
        
        return view('hasilPembayaran', ['pembayaranZakat' => $pembayaranZakat, 'bsz' => $bsz, 'whatsappUrl' => $whatsappUrl]);
    }
}
