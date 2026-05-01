<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
      protected $fillable = [
        'title',
        'description',
        'client_name',
        'status',
        'priority',
        'progress',
        'user_id',
        'start_date',
        'deadline',
        'completed_at',
        'budget',
        'notes',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}