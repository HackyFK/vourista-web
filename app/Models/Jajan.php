<?php
// app/Models/Jajan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jajan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'gambar',
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
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
}