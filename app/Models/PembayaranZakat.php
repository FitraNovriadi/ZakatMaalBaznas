<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PembayaranZakat extends Model
{
    protected $table = 'tabel_pembayaran';//nama tabel

    //atribut yang diisi
    protected $fillable = [
        'penyetor_id', 'jenis_dana', 'nominal'
    ];

    //relasi ke model penyetor
    public function penyetor(): BelongsTo
    {
        return $this->belongsTo(Penyetor::class, 'penyetor_id');//relasi ke tabel penyetor
    }
}
