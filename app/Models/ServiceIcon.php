<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceIcon extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'post_service_icon'
        );
    }
}