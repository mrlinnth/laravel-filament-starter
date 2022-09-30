<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * https://spatie.be/docs/laravel-permission/v5/prerequisites#content-schema-limitation-in-mysql
         * MySQL 8.0 limits index keys to 1000 characters.
         * This package publishes a migration which combines multiple columns in single index.
         * With utf8mb4 the 4-bytes-per-character requirement of mb4 means the max length of the columns in the hybrid index can only be 125 characters.
         * Thus in your AppServiceProvider you will need to set Schema::defaultStringLength(125)
         */
        Schema::defaultStringLength(125);

        Filament::serving(function () {
            Filament::registerTheme(
                app(Vite::class)('resources/css/admin.css'),
            );
        });

        Filament::registerStyles([
            'https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css',
        ]);
    }
}
