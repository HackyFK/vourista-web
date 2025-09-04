<?php
// database/migrations/2024_01_01_000002_create_jajans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jajans', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 150);
            $table->string('deskripsi_singkat', 255);
            $table->text('deskripsi_lengkap');
            $table->string('gambar', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jajans');
    }
};