<?php

namespace MihaiBlebea\Template;

use Illuminate\Support\ServiceProvider;
use MihaiBlebea\Template\Template;

class TemplateProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');

        $this->publishes([
            __DIR__ . '/../config/template.php' => config_path('template.php')
        ]);
    }

    public function register()
    {
        // Register the Facade
        $this->app->bind('Template', function() {
            return new Template();
        });
    }
}
