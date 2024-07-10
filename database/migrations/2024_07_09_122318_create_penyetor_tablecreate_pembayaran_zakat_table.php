<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tabel_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyetor_id')->constrained('tabel_penyetor')->onDelete('cascade');
            $table->string('jenis_dana');
            $table->decimal('nominal', 20, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tabel_pembayaran');
    }
};
