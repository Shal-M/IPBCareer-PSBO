<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'jobs';
    protected $fillable = [
        'jobs_name',
        'phonenumber',
        'email',
        'jobs_desc',
        'minimum_qualification',
        'Benefits',
        'jobs_level',
        'jobs_category',
        'jobs_vacancy',
        'jobs_industry',
        'educational_recruitment',
        'id_employer'
    ];
}
