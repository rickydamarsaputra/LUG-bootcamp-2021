<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table  = 'produk';
    protected $fillable = ['nama_produk', 'harga', 'stock', 'berat', 'thumb', 'deskripsi'];
    protected $primaryKey = 'id_produk';
}
