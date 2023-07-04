<?php

namespace Core\Http\Controllers\User;

use Core\Http\Requests\UserStoreRequest;
use Core\Http\Traits\User\InteractsWithUser;
use Illuminate\Http\JsonResponse;

class UserStoreAction
{
    use InteractsWithUser;

    /**
     * @param UserStoreRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(UserStoreRequest $request): JsonResponse
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
