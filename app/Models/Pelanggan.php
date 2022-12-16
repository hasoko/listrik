<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "pelanggan";
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [

        'id_pelanggan', 'faktor_meter', 'nama', 'npwp', 'telepon', 'id_unit'
    ];

    public $timestamps = false;
    public function unit()
    {
        return $this->belongsTo(Unit::class ,'id_unit');
        // return $this->hasMany('App\Models\Unit','id_unit');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
