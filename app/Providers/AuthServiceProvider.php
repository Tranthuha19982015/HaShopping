<?php

namespace App\Providers;

use App\Services\PermissionGateAndPolicyAccess;
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

        //define permission
        $gate_policy = new PermissionGateAndPolicyAccess();
        $gate_policy->setGateAndPolicyAccess();


//        Gate::define('product-list', function ($user) {
//            return $user->checkPermissionAccess(config('permissions.access.list-product'));
//        });

        Gate::define('role_list', function ($user) {
            return $user->checkPermissionAccess(config('permissions.access.list-role'));
        });
    }


}
