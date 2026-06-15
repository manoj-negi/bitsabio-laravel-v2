<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'problem_heading',
        'problem_description',
        'solution_heading',
        'solution_description',
        'technologies',
        'result_title',
        'result_description',

        'status',
    ];

    protected $casts = [
        'technologies' => 'array',
        'status' => 'boolean',
    ];
}