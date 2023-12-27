<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'master_kecamatan';

    protected $fillable = [
        'nama',
    ];

    public $timestamps = true;

    public function kota()
    {
        return $this->belongsTo(Master_Kota::class, 'regency_id');
    }

    public function kelurahan()
    {
        return $this->hasMany(Master_Kelurahan::class, 'district_id');
    }
}

