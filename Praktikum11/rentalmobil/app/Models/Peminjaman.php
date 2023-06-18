<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";

    protected $filleble = [
        'user-id',
        'merk_id',
        'tanggal_pemijaman',
        'tanggal_pengembalian',
        'lama_peminjaman',
        'status_mobil',
    ];
}
