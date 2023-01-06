<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kwhmeter extends Model
{
    use HasFactory;

    protected $table = "kwhmeter";
    protected $primaryKey = 'id_kwhmeter';
    protected $fillable = [

        'id_kwhmeter', 'bln_kwhmeter', 'thn_kwhmeter', 'meter_awal', 'meter_akhir', 'tgl_catat', 'id_pelanggan'
    ];

    public $timestamps = false;
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
