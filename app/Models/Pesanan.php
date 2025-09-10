<?php
// app/Models/Pesanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan',
        'alamat',
        'no_hp',
        'jarak_km',
        'ongkir',
        'subtotal_produk',
        'total_harga',
        'metode_pembayaran',
        'status',
        'tanggal_pesan',
    ];

    protected $casts = [
        'tanggal_pesan' => 'datetime',
        'jarak_km' => 'decimal:2',
        'ongkir' => 'decimal:2',
        'subtotal_produk' => 'decimal:2',
        'total_harga' => 'decimal:2',
    ];

    public function detailPesanans()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'pending' => 'bg-yellow-100 text-yellow-800',
            'dikonfirmasi' => 'bg-blue-100 text-blue-800',
            'dikirim' => 'bg-purple-100 text-purple-800',
            'selesai' => 'bg-green-100 text-green-800',
            'dibatalkan' => 'bg-red-100 text-red-800',
        ];

        return $badges[$this->status] ?? 'bg-gray-100 text-gray-800';
    }

    public static function hitungOngkir($jarakKm)
    {
        // Tarif: Rp 5000 per km
        $tarifPerKm = 5000;
        $ongkirMinimal = 10000;
        
        $ongkir = $jarakKm * $tarifPerKm;
        
        return $ongkir < $ongkirMinimal ? $ongkirMinimal : $ongkir;
    }
}