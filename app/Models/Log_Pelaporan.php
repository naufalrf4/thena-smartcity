<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'log_pelaporan';

    protected $fillable = [
        'user_id',
        'status_log_pelaporan',
        'pelaporan_id',
        'keterangan_log',
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelaporan()
    {
        return $this->belongsTo(Pelaporan::class, 'pelaporan_id');
    }

    public function statusLog()
    {
        return $this->belongsTo(StatusLogPelaporan::class, 'status_log_pelaporan');
    }

}
