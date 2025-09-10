<?php
// database/migrations/2024_01_02_000002_create_pesanans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->text('alamat');
            $table->string('no_hp');
            $table->decimal('jarak_km', 5, 2);
            $table->decimal('ongkir', 10, 2);
            $table->decimal('subtotal_produk', 10, 2);
            $table->decimal('total_harga', 10, 2);
            $table->enum('metode_pembayaran', ['COD'])->default('COD');
            $table->enum('status', ['pending', 'dikonfirmasi', 'dikirim', 'selesai', 'dibatalkan'])->default('pending');
            $table->timestamp('tanggal_pesan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};