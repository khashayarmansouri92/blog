<?php

namespace Domain\Model\Post;

use Domain\Model\Comment\Comment;
use Domain\Model\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Post extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'title',
        'contents',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
