<?php

namespace Core\Http\Services\Video;

use Core\Http\Traits\Video\InteractsWithVideo;
use Illuminate\Database\Eloquent\Model;

class VideoService implements VideoServiceInterface
{
    use InteractsWithVideo;
    public function store($request): Model
    {
        return $this->VideoRepository()->store($request);
    }

    public function findOrFail($request): Model
    {
        return $this->VideoRepository()->findOrFail($request);
    }
}
