<?php

namespace Core\Http\Traits\Video;

use Core\Http\Services\Video\VideoServiceInterface;
use Domain\Repositories\Video\VideoRepositoryInterface;

trait InteractsWithVideo
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function VideoService()
    {
        try {
            return app()->make(VideoServiceInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function VideoRepository()
    {
        try {
            return app()->make(VideoRepositoryInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
