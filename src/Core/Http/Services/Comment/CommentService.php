<?php

namespace Core\Http\Services\Comment;


use Core\Http\Traits\Comment\InteractsWithComment;
use Core\Http\Traits\Post\InteractsWithPost;
use Core\Http\Traits\Video\InteractsWithVideo;
use Illuminate\Database\Eloquent\Model;

class CommentService implements CommentServiceInterface
{
    use InteractsWithComment, InteractsWithVideo, InteractsWithPost;

    /**
     * @param $request
     * @return Model
     * @throws \Exception
     */
    public function store($request): Model
    {
        return $this->CommentRepository()->store($request);
    }

    /**
     * @param $request
     * @param $type
     * @return Model
     * @throws \Exception
     */
    public function findOrFail($request, $type): Model
    {
        if ($type == 'post')
            return $this->PostRepository()->findOrFail($request);

        return $this->VideoRepository()->findOrFail($request);
    }

    /**
     * @param $commentable
     * @return array
     * @throws \Exception
     */
    public function getArrayInfo($commentable): array
    {
        return $this->CommentRepository()->getArrayInfo($commentable);
    }
}
