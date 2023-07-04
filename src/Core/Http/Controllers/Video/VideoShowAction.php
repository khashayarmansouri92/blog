<?php

namespace Core\Http\Controllers\Video;

use App\Repositories\Video\VideoRepository;
use Core\Http\Requests\VideoShowRequest;
use Core\Http\Traits\Comment\InteractsWithComment;
use Core\Http\Traits\Video\InteractsWithVideo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class VideoShowAction
{
    use InteractsWithVideo, InteractsWithComment;

    /**
     * @param VideoShowRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(VideoShowRequest $request): JsonResponse
    {
        try {
            $video = $this->VideoService()->findOrFail($request->input('id'));
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Video not found'
            ], 404);
        }
        // The user was found, so return the response
        return response()->json([
            'title' => $video->title,
            'url' => $video->url,
            'comments' => $this->CommentService()->getArrayInfo($video),
            'username' => $video->user->username,
        ], 200);
    }
}
