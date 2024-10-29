<?php

// app/Models/KamarKost.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KamarKost extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kamar', 'nomor_kamar', 'harga_per_bulan', 'fasilitas'];

    public function penghuni()
    {
        return $this->hasMany(PenghuniKost::class);
    }
}
