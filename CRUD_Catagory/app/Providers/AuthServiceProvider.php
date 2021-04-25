<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // register policy
         App\Models\Product::class=>App\Policies\ProductPolicy::class,
         App\Models\Category::class=>App\Policies\CategoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // use for user do ban ey klaz
        Gate::define('CategoryCrud',function(User $user){

            return $user->role ==='Admin';
        });

    }
}
