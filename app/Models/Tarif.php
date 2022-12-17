<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = "tarif";
    protected $primaryKey = 'id_tarif';
    protected $fillable = [

        'id_tarif', 'kode_tarif','tarifperkwh',
    ];
    public $timestamps = false;
}
