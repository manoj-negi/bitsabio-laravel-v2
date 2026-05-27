<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
        protected $fillable = [
        'email',
        'is_subscribed',
        'subscribed_at',
        'unsubscribed_at',
    ];
}
