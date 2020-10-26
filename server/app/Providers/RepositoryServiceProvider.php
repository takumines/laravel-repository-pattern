<?php

namespace App\Providers;

use App\Repositories\User\UserDataAccessEQRepository;
use App\Repositories\User\UserDataAccessQBRepository;
use App\Repositories\User\UserDataAccessRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserDataAccessRepositoryInterface::class,
//            UserDataAccessQBRepository::class,
            UserDataAccessEQRepository::class,
        );
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
