<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Pembayaran Zakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-left: 30%; margin-top: 15%; margin-right: 30%;">
        <h1>Tiket Pembayaran Zakat</h1>
        <p>Nomor Tiket: <strong>{{ $bsz }}</strong></p>
        <p>Nama: <strong>{{ $pembayaranZakat->penyetor->nama }}</strong></p>
        <p>Jenis Dana: <strong>{{ $pembayaranZakat->jenis_dana }}</strong></p>
        <p>Nominal: <strong>{{ number_format($pembayaranZakat->nominal, 2) }}</strong></p>
        <a href="{{ $whatsappUrl }}" class="btn btn-success">Kirim via WhatsApp</a>
        <a href="#" class="btn btn-primary" onclick="window.print()">Cetak</a>
        <a href="{{ route('formKonfirmasi') }}" class="btn btn-secondary">Konfirmasi Pembayaran</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>