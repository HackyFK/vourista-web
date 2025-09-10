<?php
// app/Models/DetailPesanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pesanan_id',
        'jajan_id',
        'jumlah',
        'harga_satuan',
        'subtotal',
    ];

    protected $casts = [
        'harga_satuan' => 'decimal:2',
        'subtotal' => 'decimal:2',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function jajan()
    {
        return $this->belongsTo(Jajan::class);
    }
}