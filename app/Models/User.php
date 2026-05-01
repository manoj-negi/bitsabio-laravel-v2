<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

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
        ];
    }

    public function role()
    {
        // return $this->belongsTo(Role::class);
        return $this->belongsTo(Role::class)->withDefault();
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
    public function hasPermission($permission)
    {
        return $this->role
            && $this->role->permissions->contains('name', $permission);
    }
}