<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
     protected $fillable = [
    'type',
    'title',
    'slug',
    'short_description',
    'description',
    'image',
    'duration',
    'level',
    'hero_title_black',
    'hero_title_blue',
    'hero_description',
    'hero_image',
    'user_id',
    'category',
    'author',
    'content',
    'tags',
    'status',
];
protected $casts = [
    'tags' => 'array',
];
public function user()
    {
        return $this->belongsTo(User::class);
    }
}
