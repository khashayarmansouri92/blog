<?php

namespace Core\Providers;

use Core\Http\Services\Post\PostService;
use Core\Http\Services\Post\PostServiceInterface;
use Domain\Repositories\Post\PostRepository;
use Domain\Repositories\Post\PostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
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
        $this->app->bind(PostServiceInterface::class, PostService::class);

        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }
}
