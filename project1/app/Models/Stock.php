<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'stok',
        'cabang_id',
        'nama_barang',
    ];

    public function barang(): BelongsTo{
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function cabang(): BelongsTo{
        return $this->belongsTo(Cabang::class);
    }

    public function barang_masuk(): BelongsTo{
        return $this->belongsTo(BarangMasuk::class, 'kode_barang','id');
    }
}
