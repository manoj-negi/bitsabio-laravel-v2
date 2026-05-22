<?php

namespace App\Policies;

use App\Models\User;

class BasePolicy
{
    public function before(User $user, $ability)
    {
        //  ADMIN → FULL ACCESS
        if ($user->role?->name === 'admin') {
            return true;
        }

        //  INTERN → ONLY VIEW
        if ($user->role?->name === 'intern') {
            return in_array($ability, ['viewAny', 'view']);
        }

        return null;
    }

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, $model): bool
    {
        return true;
    }

    //  EMPLOYEE → CREATE ONLY
    public function create(User $user): bool
    {
        return $user->role?->name === 'employee';
    }

    public function update(User $user, $model): bool
    {
        return false;
    }

    public function delete(User $user, $model = null): bool
    {
        return false;
    }

    public function deleteAny(User $user): bool
    {
        return false;
    }
}