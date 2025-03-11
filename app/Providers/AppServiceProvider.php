<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use WallaceMaxters\Masker\Masker;

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
        $this->app->singleton(Masker::class, fn () => new Masker());
    }
}
