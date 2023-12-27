<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Kota extends Model
{
    use HasFactory;
    protected $table = 'master_kota';

    protected $fillable = [
        'nama',
        'province_id',
    ];

    public $timestamps = true;

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    public function kecamatan()
    {
        return $this->hasMany(Master_Kecamatan::class, 'regency_id');
    }

    // Define the relationship with Supplier
    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'kota');
    }
}
