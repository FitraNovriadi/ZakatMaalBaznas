@extends('head')
@section('content')
    <div class="container" style="margin-top: 10%; margin-bottom: 10%; width: 60%;">
        <div class="alert alert-primary" role="alert">
            Panduan Penggunaan:
        <ul>
            <li>Isi data dengan benar.</li>
            <li>Cetak tiket pembayaran zakat.</li>
            <li>Setelah mencetak tiket pembayaran zakat, lakukan pembayaran melalui nomor rekening yang ada di halaman Transfer Zakat.</li>
            <li>Setelah transfer, lakukan konfirmasi pembayaran.</li>
        </ul>
        </div>
        <h4>Tiket Pembayaran Zakat Maal</h4><br>
        <form action="/bayar" method="POST">
            @csrf
            <div class="form-group">
                <label for="jenis_dana">Jenis Dana:</label><br>
                <select id="jenis_dana" name="jenis_dana" class="form-control" required>
                    <option value="Uang">Uang</option>
                    <option value="Emas">Emas</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="nominal">Nominal:</label><br>
                <input type="number" id="nominal" name="nominal" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label><br>
                <input type="text" id="no_hp" name="no_hp" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" class="form-control" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Proses Tiket</button>
        </form>
    </div>
@endsection
