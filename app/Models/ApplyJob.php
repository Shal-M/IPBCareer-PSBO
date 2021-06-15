<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ApplyJob extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'applies';
    protected $fillable = [
        'id_jobs',
        'id_users',
    ];
}
