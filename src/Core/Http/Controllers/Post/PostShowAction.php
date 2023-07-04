<?php

namespace Core\Http\Controllers\Post;

use App\Repositories\Comment\CommentRepository;
use Core\Http\Requests\PostShowRequest;
use Core\Http\Traits\Comment\InteractsWithComment;
use Core\Http\Traits\Post\InteractsWithPost;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class PostShowAction
{
    use InteractsWithPost, InteractsWithComment;

    /**
     * @param PostShowRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(PostShowRequest $request): JsonResponse
    {
        try {
            $post = $this->PostService()->findOrFail($request->input('id'));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Post not found'
            ], 404);
        }
        // The user was found, so return the response
        return response()->json([
            'title' => $post->title,
            'content' => $post->contents,
            'comments' => $this->CommentService()->getArrayInfo($post),
            'username' => $post->user->username,
        ], 200);
    }
}
