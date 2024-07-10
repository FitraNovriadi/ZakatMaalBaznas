@extends('head')
@section('content')
    <div class="container" style="margin-top: 10%; margin-bottom: 10%; width: 60%;">
        <table class="table text-center align-middle">
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="https://baznas.go.id/assets/images/rek/BSI.png" alt="logo_bsi" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-1" value="955.5555.400" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-1')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><img src="https://baznas.go.id/assets/images/mandiri.png" alt="logo_mandiri" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-2" value="0700.0018.555.55" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-2')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><img src="https://baznas.go.id/assets/images/bca.png" alt="logo_bca" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-3" value="686.0148.755" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-3')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><img src="https://baznas.go.id/assets/images/cimb_niaga_syariah.png" alt="logo_cimb" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-4" value="860.000.148.800" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-4')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><img src="https://baznas.go.id/assets/images/bri.png" alt="logo_bri" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-5" value="0504.0100.0239.300" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-5')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><img src="https://baznas.go.id/assets/images/muamalat.png" alt="logo_muamalat" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-6" value="301.007.075.3" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-6')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><img src="https://baznas.go.id/assets/images/rek/bni.png" alt="logo_bni" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-7" value="555.550.5027" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-7')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td><img src="https://baznas.go.id/assets/images/permata_syariah.png" alt="logo_permata" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-8" value="971.006.455" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-8')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><img src="https://baznas.go.id/assets/images/rek/BSI.png" alt="logo_bsi" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-9" value="700.132.5498" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-9')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><img src="https://baznas.go.id/assets/images/rek/maybank.png" alt="logo_mybank" style="width: 20%;"></td>
                    <td>
                        <input class="form-copy" id="text-copy-10" value="270.000.0555" type="text" readonly style="border: none;">
                    </td>
                    <td><button class="btn btn-copy btn-circle" onclick="copyText('text-copy-10')"><span class="fa fa-copy" style="font-weight: bold;"> SALIN</span></button></td>
                </tr>
            </tbody>
        </table>
        <div class="alert alert-primary" role="alert">
            Panduan Pembayaran:
        <ul>
            <li>1. Pilih Jenis Bank yang dikehendaki lalu Salin Nomor Rekening</li>
            <li>2. Lakukan proses Transfer dari ATM, M-banking, i-banking, SMS-banking, dan atau teller bank.</li>
            <li>3. Simpan butki transfer dan lakukan konfirmasi.</li>
        </ul>
        </div>
    </div>    

    <script>
        function copyText(elementId) {
            // Ambil elemen input berdasarkan ID
            var copyText = document.getElementById(elementId);

            // Pilih teks di dalam elemen input
            copyText.select();
            copyText.setSelectionRange(0, 99999); // Untuk perangkat mobile

            // Salin teks ke clipboard
            document.execCommand("copy");

            // Tampilkan notifikasi atau pesan sukses
            alert("Nomor telah disalin: " + copyText.value);
        }
    </script>
@endsection
