<?php

namespace App\Models;

use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;

    protected $table = "unit";
    protected $primaryKey = 'id_unit';
    protected $fillable = [

        'id_unit', 'nama_unit', 'prefix'
    ];

    public $timestamps = false;
    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);
    }
}
