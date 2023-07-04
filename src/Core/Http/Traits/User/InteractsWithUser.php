<?php

namespace Core\Http\Traits\User;

use Core\Http\Services\User\UserServiceInterface;
use Domain\Repositories\User\UserRepositoryInterface;

trait InteractsWithUser
{
    /**
     * @return mixed
     * @throws \Exception
     */
    public function UserService()
    {
        try {
            return app()->make(UserServiceInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function UserRepository()
    {
        try {
            return app()->make(UserRepositoryInterface::class);
        }catch (\Exception $e) {
            throw new \Exception('Error');
        }
    }
}
