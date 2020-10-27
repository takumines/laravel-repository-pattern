<?php

namespace App\Providers;

use App\Book;
use App\Entities\BookList;
use App\Repositories\BookMysqlRepository;
use App\Repositories\BookSqliteRepository;
use App\Repositories\User\UserDataAccessEQRepository;
use App\Repositories\User\UserDataAccessQBRepository;
use App\Repositories\User\UserDataAccessRepositoryInterface;
use App\Services\BookDataAccess;
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
//            UserDataAccessRepositoryInterface::class,
//            UserDataAccessQBRepository::class,
//            UserDataAccessEQRepository::class,
            BookDataAccess::class, function($app) {
                return new BookMysqlRepository(new Book(), new BookList());
//                return new BookSqliteRepository(new Book(), new BookList());
        });
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
