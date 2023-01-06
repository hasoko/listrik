<?php

namespace App\Models;

use App\Models\Kwhmeter;
use App\Models\Tarif;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tagihan extends Model
{
    use HasFactory;

    protected $table = "tagihan";
    protected $primaryKey = 'id_tagihan';
    protected $fillable = [

        'id_tagihan', 'bln_tagihan', 'thn_tagihan', 'jumlah_meter', 'lwbp', 'wbp', 'pjudki', 'pemeliharaan', 'materai', 'status', 'id_pelanggan', 'id_kwhmeter', 'id_tarif'
    ];

    public $timestamps = false;
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
    public function tarif()
    {
        return $this->belongsTo(Tarif::class, 'id_tarif');
    }


    public function kwhmeter()
    {
        return $this->belongsTo(Kwhmeter::class, 'id_kwhmeter');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
