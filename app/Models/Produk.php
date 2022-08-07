<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'gambar',
        'nilai',
    ];

    public function scopeFilter($query, $filter)
    {
        $query->when(
            $filter ?? false,
            function ($q, $filter) {
                return $q->where('nama_produk','LIKE',"%$filter%");
            }
        );
    }
}
