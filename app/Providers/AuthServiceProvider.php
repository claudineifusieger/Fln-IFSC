<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
 
        Gate::define('admin', function (User $user) { 
            $ip = "172.16.0.10";
            $ds = ldap_connect($ip);
            $ldaptree   = "cn=Domain Admins,ou=Grupos,dc=cefetsc,dc=edu,dc=br";  
            $result = ldap_search($ds, $ldaptree,  "(&(objectClass=posixGroup))"  );
            $data = ldap_get_entries($ds, $result);
            ldap_close($ds);
            $membros = $data[0]['memberuid'];
            return in_array(Auth::user()->username, $membros);    
        });
        Gate::define('tifpolis', function (User $user) { 
            $ip = "172.16.0.10";
            $ds = ldap_connect($ip);
            $ldaptree   = "cn=TI_FPOLIS,ou=Grupos,dc=cefetsc,dc=edu,dc=br";
            $result = ldap_search($ds, $ldaptree,  "(&(objectClass=posixGroup))"  );
            $data = ldap_get_entries($ds, $result);
            ldap_close($ds);
            $membros = $data[0]['memberuid'];
            return in_array(Auth::user()->username, $membros);    
        });

        Fortify::authenticateUsing(function ($request) {
            $validated = Auth::validate([
                'uid' => $request->username,
                'password' => $request->password
            ]);

            return $validated ? Auth::getLastAttempted() : null;
        });

        Fortify::confirmPasswordsUsing(function (User $user, $password) {
            return Auth::validate([
                'uid' => $user->username,
                'password' => $password,
            ]);
        });


        //

    }
}
