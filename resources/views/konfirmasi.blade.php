@extends('head')
@section('content')
    <div class="container" style="margin-top: 10%; margin-bottom: 10%; width: 60%;">
        <div class="alert alert-success" role="alert">
            ISI DATA DENGAN BENAR!
        </div>
        <h3>Konfirmasi Pembayaran Zakat Maal</h3><br>
        
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form action="{{ route('konfirmasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="jenis_pembayaran">Jenis Pembayaran:</label>
                <select id="jenis_pembayaran" name="jenis_pembayaran" class="form-control" required>
                    <option value="Zakat">Zakat</option>
                </select>
            </div><br>
            <div class="form-group">
                <label for="sub_jenis_pembayaran">Sub Jenis Pembayaran:</label>
                <select id="sub_jenis_pembayaran" name="sub_jenis_pembayaran" class="form-control" required>
                    <option value="zakat_maal">Zakat Maal</option>
                </select>            
            </div><br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="tanggal_transfer">Tanggal Transfer:</label>
                <input type="date" id="tanggal_transfer" name="tanggal_transfer" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="asal_bank">Asal Bank:</label>
                <input type="text" id="asal_bank" name="asal_bank" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="tujuan_bank">Tujuan Bank:</label>
                <input type="text" id="tujuan_bank" name="tujuan_bank" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="nominal">Nominal:</label>
                <input type="number" id="nominal" name="nominal" class="form-control" required>
            </div><br>
            <div class="form-group">
                <label for="catatan">Catatan:</label>
                <textarea id="catatan" name="catatan" class="form-control"></textarea>
            </div><br>
            <div class="form-group">
                <label for="foto_bukti">Foto Bukti Transfer:</label>
                <input type="file" id="foto_bukti" name="foto_bukti" class="form-control-file" accept="image/*" required>
            </div><br>
            <button type="submit" class="btn btn-success">Kirim Konfirmasi</button>
        </form>
    </div>


@endsection
