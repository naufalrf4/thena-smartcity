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
        'status_penanganan_id',
        'foto',
        'nama_laporan',
        'role_penanganan_id',
        'deskripsi_laporan',
        'alamat_kejadian',
        'kecamatan_id',
        'kelurahan_id',
        'tgl_dibuat',
        'estimasi_selesai',
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
