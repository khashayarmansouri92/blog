<?php

namespace Core\Http\Services\Comment;

use Illuminate\Database\Eloquent\Model;

interface CommentServiceInterface
{
    public function store($request): Model;
    public function getArrayInfo($commentable): array;
}

