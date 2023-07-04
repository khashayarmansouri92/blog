<?php

namespace Core\Http\Services\Video;

use Illuminate\Database\Eloquent\Model;

interface VideoServiceInterface
{
    public function store($request): Model;
    public function findOrFail($request): Model;
}

