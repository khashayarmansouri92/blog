<?php

namespace Core\Http\Controllers\User;

use Core\Http\Requests\UserRegisterRequest;
use Core\Http\Requests\UserShowRequest;
use Core\Http\Traits\User\InteractsWithUser;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class UserShowAction
{
    use InteractsWithUser;

    /**
     * @param UserShowRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(UserShowRequest $request): JsonResponse
    {
        try {
            $user = $this->UserService()->findOrFail($request->input('id'));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'User not found'
            ], 404);
        }
        // The user was found, so return the response
        return response()->json([
            'username' => $user->username,
        ], 200);
    }
}
