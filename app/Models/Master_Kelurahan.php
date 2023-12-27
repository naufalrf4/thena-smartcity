<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'master_kelurahan';

    protected $fillable = [
        'nama',
    ];

    public $timestamps = true;

    public function kecamatan()
    {
        return $this->belongsTo(Master_Kecamatan::class, 'district_id');
    }
}
