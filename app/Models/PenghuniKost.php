<?php

// app/Models/PenghuniKost.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenghuniKost extends Model
{
    use HasFactory;

    protected $fillable = ['nama_penghuni', 'jenis_kelamin', 'no_telepon', 'alamat', 'kamar_kost_id'];

    public function kamar()
    {
        return $this->belongsTo(KamarKost::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(PembayaranKost::class);
    }
}
