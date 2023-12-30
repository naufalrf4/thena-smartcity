<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'no_telp',
        'email',
        'role_id',
        'password',
        'kecamatan_id',
        'kelurahan_id',
        'rt',
        'rw',
        'foto_profil'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getRole(){
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function getKecamatan(){
        return $this->belongsTo(Master_Kecamatan::class, 'kecamatan_id');
    }

    public function getKelurahan(){
        return $this->belongsTo(Master_Kelurahan::class, 'kelurahan_id');
    }

    public function pelaporans()
    {
        return $this->hasMany(Pelaporan::class, 'user_id');
    }

    public function assignedPetugas()
    {
        return $this->belongsToMany(Pelaporan::class, 'petugas_diassign', 'user_id', 'pelaporan_id');
    }

    public function logPelaporans()
    {
        return $this->hasMany(Log_Pelaporan::class, 'user_id');
    }

}
