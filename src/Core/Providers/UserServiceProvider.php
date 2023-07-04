<?php

namespace Core\Providers;

use Core\Http\Services\User\UserService;
use Core\Http\Services\User\UserServiceInterface;
use Domain\Repositories\User\UserRepository;
use Domain\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends  ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);

        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
