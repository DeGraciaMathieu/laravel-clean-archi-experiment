<?php

namespace App\Presenter\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return 'Database\\Factories\\' . class_basename($modelName) . 'Factory';
        });
        
        Factory::guessModelNamesUsing(function ($string) {
            return 'App\\Infrastructure\\Database\\Models\\' . str_replace('Factory', '', class_basename($string));
        });
    }
}
