<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Event;
use App\Models\Project;
use App\Policies\ProjectPolicy;
use App\Models\User;
use App\Policies\UserPolicy;
use App\Events\PostPublished;
use App\Listeners\SendPostNotification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Project::class, ProjectPolicy::class);
        Gate::policy(User::class, UserPolicy::class);

        Event::listen(
            PostPublished::class,
            SendPostNotification::class,
        );
    }
}