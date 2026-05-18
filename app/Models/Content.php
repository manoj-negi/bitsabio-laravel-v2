<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
       protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'duration',
        'level',
        'type',
        'hero_title_black',
        'hero_title_blue',
        'hero_description',
        'hero_image',
    ];
}
