<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas_Diassign extends Model
{
    use HasFactory;
    protected $table = 'petugas_diassign';

    protected $fillable = [
        'user_id',
        'pelaporan_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class, 'pelaporan_id');
    }
}
