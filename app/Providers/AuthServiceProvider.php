<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //An admin has a role_id greater than 1
        Gate::define('admin', function($user) {

            return $user->roles[0]['id'] > 1;
        });

        //A super admin has a role_id of 3
        Gate::define('super-admin', function($user) {

            return $user->roles[0]['id'] === 3;
        });
    }
}
