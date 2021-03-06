<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoCall extends Model
{
    use HasFactory;
    protected $table = 'videocall';
    protected $fillable = [
        'id_userCalled',
        'id_userCall',
        'status',
    ];
}
