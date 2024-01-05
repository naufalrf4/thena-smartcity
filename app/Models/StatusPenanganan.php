<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPenanganan extends Model
{
    use HasFactory;

    protected $table = 'status_penanganan';

    protected $fillable = [
        'status',
        'color'
    ];

    public function pelaporans()
    {
        return $this->hasMany(Pelaporan::class, 'status_penanganan_id');
    }

}
