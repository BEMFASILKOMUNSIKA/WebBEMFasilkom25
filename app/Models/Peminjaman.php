<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = [
        'username',
        'email',
        'barang',
        'jumlah',
        'tanggal_pinjam',
        'estimasi_pengembalian',
        'status',
    ];
}
