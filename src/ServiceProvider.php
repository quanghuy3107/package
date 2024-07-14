<?php

namespace quanghuy\first_package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish config, routes, views, migrations, etc.
        $this->publishes([
            __DIR__.'/../config/package.php' => config_path('package.php'),
        ], 'config');
    }

    public function register()
    {
        // Register package services
    }
}
