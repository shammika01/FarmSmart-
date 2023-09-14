<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function ($view) {
            // Define the $cart variable here, or retrieve it from the session, database, or any other source.
            // For example, you can retrieve it from the session like this:
            $cart = session('cart', []);

            // Share the $cart variable with all views
            $view->with('cart', $cart);
        });
    }
}
