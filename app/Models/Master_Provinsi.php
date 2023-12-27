<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Provinsi extends Model
{
    use HasFactory;

    protected $table = 'master_provinsi';

    protected $fillable = [
        'nama', 
    ];

    public $timestamps = true;

    public function kota()
    {
        return $this->hasMany(Master_Kota::class, 'province_id');
    }
}
