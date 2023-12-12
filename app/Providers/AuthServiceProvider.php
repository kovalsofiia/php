<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Accountings;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
       Gate::define('object-view-create', function (User $user) {
           return true;
       });

       Gate::define('object-edit', function (User $user, Accountings $car) {
           if($user->role === "editor"|| $user->role === "super-admin"){
                return true;
           }
           return $user->id === $car->user_id;
       });

        Gate::define('object-delete', function (User $user) {
            if($user->role === "super-admin"){
                return true;
            }
            return false;
        });

    }
}
