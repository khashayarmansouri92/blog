<?php

namespace Domain\Repositories\User;
use Domain\Model\User\User;
use Domain\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $request
     * @return $token
     */
    public function login($request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('Token')->accessToken;

            return $token;
        }

        return null;
    }
}
