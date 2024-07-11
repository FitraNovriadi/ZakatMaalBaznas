@extends('head')
@section('content')
    <div class="container" style="margin-top: 15%; margin-bottom: 15%;">
        <h1>Hasil Perhitungan Zakat Maal</h1><br>
        <p>Zakat yang harus Anda bayar adalah: <strong>Rp.{{ number_format($zakat, 2) }}</strong></p>
        <a href="/" class="btn btn-success">Kembali ke Halaman Utama</a>
    </div>
@endsection
