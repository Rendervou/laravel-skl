<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'Keranjang';
    protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_Barang');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}


