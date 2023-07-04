<?php

namespace Core\Http\Controllers\User;

use Core\Http\Traits\User\InteractsWithUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserLoginAction
{
    use InteractsWithUser;

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(Request $request): JsonResponse
    {
        $token = $this->UserService()->login($request);

        if ($token) {
            return response()->json([
                'token' => $token,
            ], 201);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }
}
