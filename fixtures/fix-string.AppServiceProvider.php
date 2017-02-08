<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // I am using MAMP with sql 5.6, so I had to this for migrations to work
        // For more info see 'Index Lengths & MySQL / MariaDB' from this page
        //   https://laravel.com/docs/master/migrations#creating-indexes
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
