<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\URL;

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
        Gate::define('view-edit', function (User $user, Article $article) {
            if ($user->is($article->user)) {
                return Response::allow();
            }
            
            return Response::denyAsNotFound();
        });
        
        Gate::define('update', function (User $user) {
            if ($user->is($user)) {
                return Response::allow();
            } 

            return Response::deny();
        });

        // This forces every asset, link, and favicon route to use https://
        if (config('app.env') === 'production' || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
