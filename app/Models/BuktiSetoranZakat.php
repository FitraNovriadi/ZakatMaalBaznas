<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BuktiSetoranZakat extends Model
{
    protected $table = 'tabel_bukti_setoran_zakat';//nama tabel

    //atribut yang diisi
    protected $fillable = [
        'penyetor_id', 'pembayaran_id', 'nama', 'jenis_kelamin', 'jenis_pembayaran', 'sub_jenis_pembayaran',
        'email', 'tanggal_transfer', 'asal_bank', 'tujuan_bank', 'nominal', 'catatan', 'foto_bukti'
    ];

    //relasi dengan model penyetor
    public function penyetor(): BelongsTo
    {
        return $this->belongsTo(Penyetor::class, 'penyetor_id');//relasi dengan tabel penyetor
    }

    //relasi dengan model pembayaran
    public function pembayaran(): BelongsTo
    {
        return $this->belongsTo(PembayaranZakat::class, 'penyetor_id', 'pembayaran_id');//relasi dengan tabel pembayaran
    }
}
