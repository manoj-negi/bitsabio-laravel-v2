<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Events\PostPublished;
use Illuminate\Support\Facades\Storage;


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
    'priority',
];
protected $casts = [
    'tags' => 'array',
];
public $sortable = [
    'order_column_name' => 'priority',
    'sort_when_creating' => true,
];

public function buildSortQuery()
    {
        return static::query()->where('type', $this->type);
    }
protected static function booted()
{
    // Priority logic
    static::creating(function ($post) {

        $maxPriority = static::where('type', $post->type)
            ->max('priority');

        $post->priority = $maxPriority
            ? $maxPriority + 1
            : 1;
    });
    // email notification logic 
            static::created(function ($post) {

            if (in_array($post->type, ['blog', 'course', 'service'])) {

                event(new PostPublished($post));

            }
        });
}
public function user()
    {
        return $this->belongsTo(User::class);
    }

public function getImageUrlAttribute()
{
    return $this->image
        ? Storage::disk('s3')->url($this->image)
        : null;
}
}
