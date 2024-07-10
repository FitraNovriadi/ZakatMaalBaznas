<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PembayaranZakat extends Model
{
    protected $table = 'tabel_pembayaran';

    protected $fillable = [
        'penyetor_id', 'jenis_dana', 'nominal'
    ];

    public function penyetor(): BelongsTo
    {
        return $this->belongsTo(Penyetor::class, 'penyetor_id');
    }
}
