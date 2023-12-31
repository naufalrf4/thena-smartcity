<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusLogPelaporan extends Model
{
    use HasFactory;

    protected $table = 'status_log_penanganan';

    protected $fillable = [
        'status',
    ];
}
