<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tabel_bukti_setoran_zakat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyetor_id')->constrained('tabel_penyetor')->onDelete('cascade');
            $table->foreignId('pembayaran_id')->constrained('tabel_pembayaran')->onDelete('cascade');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('jenis_pembayaran');
            $table->string('sub_jenis_pembayaran');
            $table->string('email');
            $table->date('tanggal_transfer');
            $table->string('asal_bank');
            $table->string('tujuan_bank');
            $table->decimal('nominal', 20, 2);
            $table->text('catatan')->nullable();
            $table->string('foto_bukti');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tabel_bukti_setoran_zakat');
    }
};
