<?php

namespace Core\Http\Controllers\Comment;

use Core\Http\Requests\CommentStoreRequest;
use Core\Http\Traits\Comment\InteractsWithComment;
use Illuminate\Http\JsonResponse;

class CommentStoreAction
{
    use InteractsWithComment;

    /**
     * @param CommentStoreRequest $request
     * @param $id
     * @param $type
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(CommentStoreRequest $request, $id, $type): JsonResponse
    {
        $commentable = $this->CommentService()->findOrFail($id, $type);

        $comment = $this->CommentService()->store([
            'text' => $request->text,
            'commentable_type' => $type,
            'commentable_id' => $commentable->id,
        ]);

        return response()->json([
            'text' => $comment->text,
        ], 201);
    }
}
