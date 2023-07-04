<?php

namespace Domain\Model\Video;

use Domain\Model\Comment\Comment;
use Domain\Model\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Video extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'title',
        'url',
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
