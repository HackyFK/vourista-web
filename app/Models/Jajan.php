<?php
// app/Models/Jajan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jajan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'gambar',
        'harga',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function detailPesanans()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function getAverageRatingAttribute()
    {
        return $this->ratings()->avg('nilai') ?? 0;
    }

    public function getTotalRatingsAttribute()
    {
        return $this->ratings()->count();
    }

    public function getGambarUrlAttribute()
    {
        return asset('storage/jajan/' . $this->gambar);
    }

    public function getFormattedHargaAttribute()
    {
        // cukup pakai \number_format() langsung
        return 'Rp ' . number_format((float) $this->harga, 0, ',', '.');
    }
}
