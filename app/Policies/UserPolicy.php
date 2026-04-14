<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy extends BasePolicy
{
    public function create(User $user): bool
    {
        return $user->role?->name === 'admin';
    }
    // User can update ONLY their own profile
    public function update(User $user, $model): bool
    {
        return $user->id === $model->id;
    }

    // No one except admin can delete users
    public function delete(User $user, $model = null): bool
    {
        return false;
    }
}