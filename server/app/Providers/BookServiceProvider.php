<?php

namespace App\Providers;

use App\Services\BookService;
use Illuminate\Support\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BookService', BookService::class);
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
