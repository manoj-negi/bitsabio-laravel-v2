<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Events\PostPublished;
use App\Models\ServiceIcon;
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
    'curriculum_preview',
    'projects_you_will_build',
    'interactive_roadmap',
    'industry_projects',
    'average_salary',
    'curriculum_hero',
    'career_roles',
];
protected $casts = [
    'tags' => 'array',
    'curriculum_preview' => 'array',
    'projects_you_will_build' => 'array',
    'interactive_roadmap' => 'array',
    'average_salary' => 'array',
    'career_roles' => 'array',
    'industry_projects' => 'array',
    'curriculum_hero' => 'array',
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

public function serviceIcons()
{
    return $this->belongsToMany(
        ServiceIcon::class,
        'post_service_icon'
    );
}
public function locations(){
    return $this->belongsToMany(Location::class);
}
// public function getImageUrlAttribute(): ?string
// {
//     return $this->image
//         ? Storage::disk('s3')->url('posts/' . $this->image)
//         : null;
// }
}
