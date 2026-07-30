<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'address',
        'phone',
        'google_map',
        'status',
    ];

        public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}