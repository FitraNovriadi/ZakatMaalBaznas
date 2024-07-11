<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyetor;
use App\Models\PembayaranZakat;
use App\Models\BuktiSetoranZakat;

class AdminController extends Controller
{
    public function index()
    {
        $penyetors = Penyetor::all();
        $pembayarans = PembayaranZakat::with('penyetor')->get();
        $buktiSetoranZakats = BuktiSetoranZakat::with('penyetor', 'pembayaran')->get();

        return view('admindash.admin', compact('penyetors', 'pembayarans', 'buktiSetoranZakats'));
    }
}
