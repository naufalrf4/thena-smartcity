<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaporan extends Model
{
    use HasFactory;

    protected $table = 'pelaporan';

    protected $fillable = [
        'user_id',
        'status_penanganan_id',
        'lat_coor',
        'lng_coor',
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

    public function submitter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function statusPenanganan()
    {
        return $this->belongsTo(StatusPenanganan::class, 'status_penanganan_id');
    }

    public function assignedPetugas()
    {
        return $this->belongsToMany(User::class, 'petugas_diassign', 'pelaporan_id', 'user_id');
    }

    public function log_pelaporans()
    {
        return $this->hasMany(Log_Pelaporan::class, 'pelaporan_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Master_Kecamatan::class, 'kecamatan_id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Master_Kelurahan::class, 'kelurahan_id');
    }

    public function rolePenanganan()
    {
        return $this->belongsTo(Roles::class, 'role_penanganan_id');
    }
}
