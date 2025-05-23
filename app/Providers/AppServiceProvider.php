<?php

namespace App\Providers;

use App\Models\Good;
use App\Models\Operator;
use App\Policies\OperatorPolicy;
use App\Policies\GoodPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

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
        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super admin') ? true : null;
        });
        Gate::policy(Good::class, GoodPolicy::class);
        Gate::policy(Operator::class, OperatorPolicy::class);
        JsonResource::withoutWrapping();

    }
}
