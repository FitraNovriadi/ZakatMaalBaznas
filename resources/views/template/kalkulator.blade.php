@extends('head')
@section('content')
    
    <div class="container" style="margin-top: 10%; margin-bottom: 10%; width: 60%;">
        <div class="alert alert-success" role="alert">
        Zakat Penghasilan/Emas:
        <ul>
            <li>Zakat maal yang wajib dikeluarkan atas harta yang berasal dari pendapatan/penghasilan rutin dari pekerjaan yang tidak melanggar syariah.</li>
            <li>Nishab zakat penghasilan sebesar 85 gram emas per tahun (Rp.82.312.725/tahun).</li>
            <li>Kadar/total pembayaran zakat senilai 2,5% dari penghasilan.</li>
            <li>Jadi apabila penghasilan telah melebihi nilai nishab, maka wajib dikeluarkan zakatnya sebesar 2,5% dari penghasilannya tersebut.</li>
        </ul>
        </div>
        <h3>Perhitungan Zakat Maal</h3><br>
        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
        @endif
        <form action="/perhitungan-zakat" method="POST">
            @csrf
            <div class="form-group">
                <label for="total_harta">Total Harta:</label>
                <input type="number" id="total_harta" name="total_harta" class="form-control" required>
            </div><br>
            <button type="submit" class="btn btn-success">Hitung Zakat</button>
        </form>
    </div>
@endsection
