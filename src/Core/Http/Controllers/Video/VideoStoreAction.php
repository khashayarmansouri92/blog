<?php

namespace Core\Http\Controllers\Video;

use Core\Http\Requests\VideoStoreRequest;
use Core\Http\Traits\Video\InteractsWithVideo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class VideoStoreAction
{
    use InteractsWithVideo;

    /**
     * @param VideoStoreRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function __invoke(VideoStoreRequest $request): JsonResponse
    {
        $video = $this->VideoService()->store([
            'title' => $request->title,
            'url' => $request->url,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json([
            'id' => $video->id,
        ], 201);
    }
}
