<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyetor extends Authenticatable
{
    protected $table = 'tabel_penyetor';//nama tabel

    //atribut yang diisi
    protected $fillable = [
        'nama', 'jenis_kelamin', 'no_hp', 'email'
    ];

    //relasi model pembayaran
    public function pembayaranZakat(): HasMany
    {
        return $this->hasMany(PembayaranZakat::class, 'penyetor_id');//relasi tabel pembayaran
    }

    //relasi model bukti setoran
    public function buktiSetoranZakat(): HasMany
    {
        return $this->hasMany(BuktiSetoranZakat::class, 'penyetor_id');//relasi tabel bukti setoran
    }
}
