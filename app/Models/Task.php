<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project_id',
        'title',
        'description',
        'image',
        'status',
        'priority',
        'progress',
        'start_date',
        'due_date',
        'created_by',
    ];

    protected $casts = [
        'start_date' => 'date',
        'due_date' => 'date',
    ];
// relationship 

    // A Task belongs to one Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // A Task is created by one User
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // A Task can be assigned to multiple Users
    public function users()
    {
        return $this->belongsToMany(User::class, 'task_user')
            ->withTimestamps();
    }
}