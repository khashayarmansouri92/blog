<?php

namespace Core\Http\Controllers\Post;

use Core\Http\Requests\PostStoreRequest;
use Core\Http\Traits\Post\InteractsWithPost;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class PostStoreAction
{
    use InteractsWithPost;

    /**
     * @param PostStoreRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(PostStoreRequest $request): JsonResponse
    {
        $post = $this->PostService()->store([
            'title' => $request->title,
            'contents' => $request->contents,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json([
            'id' => $post->id,
        ], 201);
    }
}
