<?php

namespace App\Models;

use App\Models\Informasi;
use App\Models\Pelanggan;
use App\Models\Pembayaran;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "user";
    protected $primaryKey = 'id_user';
    protected $fillable = [

        'id_user', 'username', 'password', 'status', 'id_pelanggan'
    ];

    public $timestamps = false;
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_pelanggan');
    }

    public function informasi()
    {
        return $this->hasMany(Informasi::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
