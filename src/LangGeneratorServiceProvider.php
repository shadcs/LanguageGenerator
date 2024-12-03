<?php

namespace Shadcs\LangGenerator;

use Illuminate\Support\ServiceProvider;

class LangGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {

        $this->app->singleton(Commands\LanguageGenerator::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

        $this->commands([
            Commands\LanguageGenerator::class,
        ]);
    }
}
