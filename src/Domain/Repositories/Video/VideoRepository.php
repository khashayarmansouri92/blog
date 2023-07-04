<?php

namespace Domain\Repositories\Video;

use Domain\Model\Video\Video;
use Domain\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;

class VideoRepository extends BaseRepository implements VideoRepositoryInterface
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }
}
