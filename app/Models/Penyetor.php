<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyetor extends Authenticatable
{
    protected $table = 'tabel_penyetor';

    protected $fillable = [
        'nama', 'jenis_kelamin', 'no_hp', 'email'
    ];

    public function pembayaranZakat(): HasMany
    {
        return $this->hasMany(PembayaranZakat::class, 'penyetor_id');
    }

    public function buktiSetoranZakat(): HasMany
    {
        return $this->hasMany(BuktiSetoranZakat::class, 'penyetor_id');
    }
}
