<?php

namespace Core\Providers;

use Core\Http\Services\Comment\CommentService;
use Core\Http\Services\Comment\CommentServiceInterface;
use Domain\Repositories\Comment\CommentRepository;
use Domain\Repositories\Comment\CommentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
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
        $this->app->bind(CommentServiceInterface::class, CommentService::class);

        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
    }
}
