<?php
// app/Models/Rating.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'jajan_id',
        'nilai',
        'ulasan',
    ];

    public function jajan()
    {
        return $this->belongsTo(Jajan::class);
    }
}