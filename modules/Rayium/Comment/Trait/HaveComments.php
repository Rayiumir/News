<?php

namespace modules\Rayium\Comment\Trait;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use modules\Rayium\Comment\Models\Comment;

class HaveComments
{
    use HasRelationships;

    public function comments()
    {
        $this->morphMany(Comment::class, 'commentable');
    }

    public function activeComments()
    {
        $this->morphMany(Comment::class, 'commentable')
            ->where('status', Comment::STATUS_ACTIVE)
            ->with('comments')
            ->whereNull('comment_id');
    }

}
