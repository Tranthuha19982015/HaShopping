<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        Gate::define('category-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-category'));
        });

        Gate::define('category-add', function ($user) {
            return $user->checkPermissionAccess('category_add');
        });

        Gate::define('category-edit', function ($user) {
            return $user->checkPermissionAccess('category_edit');
        });

        Gate::define('product-list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-product'));
        });

        Gate::define('slider_list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-slider'));
        });

        Gate::define('user_list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-user'));
        });

        Gate::define('role_list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-role'));
        });
    }
}
