<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $fillable = [
        'badge',
        'title',
        'subtitle',
        'highlights',
        'button_text',
        'button_link',
        'image',
    ];

    protected $casts = [
        'highlights' => 'array',
    ];
}