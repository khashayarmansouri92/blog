<?php

namespace Domain\Repositories\Post;

use Domain\Model\Post\Post;
use Domain\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }
}
