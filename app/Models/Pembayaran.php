<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tagihan;
use App\Models\Kwhmeter;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayaran";
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [

        'id_pembayaran', 'tgl_bayar', 'total_bayar', 'id_tagihan', 'id_pelanggan', 'id_kwhmeter', 'id_user'
    ];

    public $timestamps = false;
    public function tagihan()
    {
        return $this->belongsTo(Tagihan::class, 'id_tagihan');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }

    public function kwhmeter()
    {
        return $this->belongsTo(Kwhmeter::class, 'id_kwhmeter');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
