<?php

namespace Core\Http\Services\Post;

use Core\Http\Traits\Post\InteractsWithPost;
use Illuminate\Database\Eloquent\Model;

class PostService implements PostServiceInterface
{
    use InteractsWithPost;

    /**
     * @param $request
     * @return Model
     * @throws \Exception
     */
    public function store($request): Model
    {
        return $this->PostRepository()->store($request);
    }

    /**
     * @param $request
     * @return Model
     * @throws \Exception
     */
     public function findOrFail($request): Model
    {
        return $this->PostRepository()->findOrFail($request);
    }
}
