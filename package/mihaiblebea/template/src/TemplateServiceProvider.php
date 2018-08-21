<?php

namespace MihaiBlebea\Template;

use Illuminate\Support\ServiceProvider;
use MihaiBlebea\Template\Template;
use MihaiBlebea\Template\Commands\TemplateCommand;


class TemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views');

        $this->publishes([
            __DIR__ . '/../config/template.php' => config_path('template.php'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/template'),
            __DIR__ . '/../migrations' => database_path('migrations')
        ]);

        if($this->app->runningInConsole())
        {
            $this->commands([
                TemplateCommand::class,
            ]);
        }
    }

    public function register()
    {
        // Register the Facade
        $this->app->bind('Template', function() {
            return new Template();
        });
    }
}
