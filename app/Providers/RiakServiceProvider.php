<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //$loader = RiakServiceProvider::getInstance();

        // Add your aliases
        //$loader->alias('Image', Intervention\Image\Facades\Image::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
