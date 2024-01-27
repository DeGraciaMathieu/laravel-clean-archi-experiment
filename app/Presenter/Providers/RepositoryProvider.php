<?php

namespace App\Presenter\Providers;

use App\Domain;
use Illuminate\Support\ServiceProvider;
use App\Infrastructure;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(Domain\PostRepository::class, Infrastructure\Database\EloquentPost::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
