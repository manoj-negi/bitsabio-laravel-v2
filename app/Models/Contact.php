<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
      protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'project_type',
        'message',
        'status',
        'inquiry_type',
        'course_name',
    ];
}