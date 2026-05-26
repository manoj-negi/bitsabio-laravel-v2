<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\HeroSlider;
use Illuminate\Auth\Access\HandlesAuthorization;

class HeroSliderPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:HeroSlider');
    }

    public function view(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('View:HeroSlider');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:HeroSlider');
    }

    public function update(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('Update:HeroSlider');
    }

    public function delete(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('Delete:HeroSlider');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:HeroSlider');
    }

    public function restore(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('Restore:HeroSlider');
    }

    public function forceDelete(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('ForceDelete:HeroSlider');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:HeroSlider');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:HeroSlider');
    }

    public function replicate(AuthUser $authUser, HeroSlider $heroSlider): bool
    {
        return $authUser->can('Replicate:HeroSlider');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:HeroSlider');
    }

}