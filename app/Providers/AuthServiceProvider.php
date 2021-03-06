<?php

namespace App\Providers;

use App\Permission;
use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract  $gate)
    {
        Passport::routes();

        $this->registerPolicies($gate);

        /*Gate::define('update-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });*/
        $permissions=Permission::with('roles')->get();
        foreach ( $permissions as $permission ){
            $gate->define($permission->name,function (User $user) use ($permission){
                return $user->hasPermission($permission);
            });
        }

        //


    }
}
