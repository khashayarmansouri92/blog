<?php

namespace Domain\Model\Comment;

use Domain\Model\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comment extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'text',
        'commentable_type',
        'commentable_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
