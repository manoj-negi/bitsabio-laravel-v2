<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterviewQuestion extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_description',
        'content',
        'status',
        'average_salary',
        'priority',
    ];

    protected $casts = [
        'content' => 'array',
        'average_salary' => 'array',
        'status'  => 'boolean',
    ];
}