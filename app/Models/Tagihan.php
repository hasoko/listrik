<?php

namespace App\Models;

use App\Models\Kwhmeter;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = "tagihan";
    protected $fillable = [

        'id_tagihan', 'bulan', 'tahun', 'jumlah_meter', 'lwbp', 'wbp', 'pjudki', 'pemeliharaan', 'materai', 'id_pelanggan', 'id_kwhmeter'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function kwhmeter()
    {
        return $this->belongsTo(Kwhmeter::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}