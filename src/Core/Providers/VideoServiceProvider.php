<?php

namespace Core\Providers;

use Core\Http\Services\Video\VideoService;
use Core\Http\Services\Video\VideoServiceInterface;
use Domain\Repositories\Video\VideoRepository;
use Domain\Repositories\Video\VideoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class VideoServiceProvider extends ServiceProvider
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
        $this->app->bind(VideoServiceInterface::class, VideoService::class);

        $this->app->bind(VideoRepositoryInterface::class, VideoRepository::class);
    }
}
