<?php

namespace App\Models;

use App\Mail\BlogPublishedMail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'author',
        'image',
        'content',
        'read_time',
        'status',
        'tags',
    ];
    protected $casts = [
        'tags' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
// send mail 
    protected static function booted()
    {
        static::created(function ($blog) {

                $subscribers = Subscriber::where(
                'is_subscribed',
                true
            )->get();
            

            foreach ($subscribers as $subscriber) {

                Mail::to($subscriber->email)
                    ->send(
                        new BlogPublishedMail($blog, $subscriber)
                    );
            }
        });
    }
}