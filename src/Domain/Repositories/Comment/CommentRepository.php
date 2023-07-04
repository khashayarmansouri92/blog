<?php

namespace Domain\Repositories\Comment;

use Domain\Model\Comment\Comment;
use Domain\Repositories\BaseRepository;
use Illuminate\Support\Facades\Auth;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $commentable
     * @return array
     */
    public function getArrayInfo($commentable) : array
    {
        $array = array();

        if (count($commentable->comments))
        {
            foreach ($commentable->comments as $key => $comment)
            {
                $array[$key][] = $comment->commentable->user->username;
                array_push($array[$key], $comment->text);
            }
        }

        return $array;
    }
}
