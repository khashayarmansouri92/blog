<?php

namespace Core\Http\Services\Post;

interface PostServiceInterface
{
    public function store($request);
    public function findOrFail($request);
}

