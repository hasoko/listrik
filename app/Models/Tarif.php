<?php

namespace App\Models;

use App\Models\Tagihan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = "tarif";
    protected $primaryKey = 'id_tarif';
    protected $fillable = [

        'id_tarif', 'tarif_lwbp', 'tarif_wbp',
    ];
    public $timestamps = false;
    public function tagihan()
    {
        return $this->hasMany(Tagihan::class);
    }
}
