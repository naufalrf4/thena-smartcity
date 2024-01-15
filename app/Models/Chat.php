<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';

    protected $fillable = [
        'pelaporan_id',
        'sender_id',
        'chat'
    ];

    public function pelaporan(){
        return $this->belongsTo(Pelaporan::class, 'pelaporan_id');
    }

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
}
