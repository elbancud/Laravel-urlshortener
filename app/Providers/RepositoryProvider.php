<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\UrlInterface;
use App\Repositories\UrlRepository;
class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */ 
    public function register()
    {
        $this->app->bind(UrlInterface::class,UrlRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
