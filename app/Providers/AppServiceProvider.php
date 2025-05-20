<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * This method is used to bind classes or interfaces into the service container.
     * You can also register third-party services here.
     *
     * @return void
     */
    public function register()
    {
        // Example: Binding an interface to an implementation
        // $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * This method is used to configure services after all other services have been registered.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for older MySQL versions that require string length on indexes
        Schema::defaultStringLength(191);

        // You can also define custom Blade directives, view composers, etc.
    }
}
