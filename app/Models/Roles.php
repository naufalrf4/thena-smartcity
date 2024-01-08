<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'level_role',
        'dep_role'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }

    public function dependecyRole(){
        return $this->belongsTo(Roles::class, 'dep_role');
    }

    public function petugas()
    {
        return $this->hasMany(Roles::class, 'dep_role');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($roles) {
            // Delete related Petugas
            $roles->petugas()->delete();
        });
    }
    
}
