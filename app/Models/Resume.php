<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resumes'; // Specify the table name if it doesn’t follow Laravel's naming conventions

    protected $fillable = [
        'name',
        'email',
        'phone',
        'summary',
        'education',
        'experience',
        'skills',
        'projects'
    ];
}

