<?php

namespace Core\Http\Traits\Post;

use Core\Http\Services\Post\PostServiceInterface;
use Domain\Repositories\Post\PostRepositoryInterface;

trait InteractsWithPost
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function PostService()
    {
        try {
            return app()->make(PostServiceInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function PostRepository()
    {
        try {
            return app()->make(PostRepositoryInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
