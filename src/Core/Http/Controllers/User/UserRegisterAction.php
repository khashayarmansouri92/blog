<?php

namespace Core\Http\Controllers\User;

use Core\Http\Requests\UserRegisterRequest;
use Core\Http\Traits\User\InteractsWithUser;
use Illuminate\Http\JsonResponse;

class UserRegisterAction
{
    use InteractsWithUser;

    /**
     * @param UserRegisterRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(UserRegisterRequest $request): JsonResponse
    {
        $user = $this->UserService()->store([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('Token')->accessToken;

        return response()->json([
            'id' => $user->id,
            'token' => $token,
        ], 201);
    }
}
