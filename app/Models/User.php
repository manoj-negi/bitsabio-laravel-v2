<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'designation',
        'salary',
        'joining_date',
        'leaving_date',
        'number_of_leaves',
        'status',
        'notes',
        'intern_details',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'joining_date' => 'date',
            'leaving_date' => 'date',
            'password' => 'hashed',
            'intern_details' => 'array',
        ];
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}