<?php

namespace Core\Http\Services\User;

interface UserServiceInterface
{
    public function store($request);
    public function findOrFail($request);
}
