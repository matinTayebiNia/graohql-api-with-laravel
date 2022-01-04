<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Permission;
use App\Policies\BookPolicy;
use App\Notifications\ResetPassword;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Carbon;
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
//         'App\Models\Model' => 'App\Policies\ModelPolicy',
        Book::class => BookPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user) {
            if ($user->isSuperuser()) return true;
        });
        foreach (Permission::all() as $item) {
            Gate::define($item->name, function ($user) use ($item) {
                return $user->hasPermission($item);
            });
        }
        if (!$this->app->routesAreCached()) {
            Passport::routes(function ($router) {
                $router->forAccessTokens();
            });
            ResetPassword::createUrlUsing(function ($user, $token) {
                return 'http://localhost:8080/auth/reset-password/' . $token . '/' . $user->email;  // Here is your custom url
            });
            Passport::tokensExpireIn(Carbon::now()->addMinutes(40));
            Passport::refreshTokensExpireIn(Carbon::now()->addHours(1)->addMinutes(20));
        }
    }
}
