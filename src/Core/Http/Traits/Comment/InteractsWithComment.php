<?php

namespace Core\Http\Traits\Comment;

use Core\Http\Services\Comment\CommentServiceInterface;
use Domain\Repositories\Comment\CommentRepositoryInterface;

trait InteractsWithComment
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function CommentService()
    {
        try {
            return app()->make(CommentServiceInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function CommentRepository()
    {
        try {
            return app()->make(CommentRepositoryInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
