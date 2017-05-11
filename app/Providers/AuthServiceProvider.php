<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use Auth;
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
        $array=['VIEW_ADMIN','ADMIN_USERS','SELF_ADMIN'];


    foreach ($array as $value){
    Gate::define($value, function (User $user) {
        $arr=['VIEW_ADMIN','ADMIN_USERS','SELF_ADMIN'];
        $gates = false;
        if($user->canDo($arr)==true){

         return true;
        }


        });


    }


}
}
