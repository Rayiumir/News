<?php

namespace modules\Rayium\Comment\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use modules\Rayium\User\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment_id',
        'body',
        'commentable_id',
        'commentable_type',
        'status'
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_NEW = 'new';
    public const STATUS_INACTIVE = 'inactive';

    public static array $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_NEW,
        self::STATUS_INACTIVE
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment()
    {
        return $this->belongsTo(__CLASS__, 'comment_id');
    }

    public function comments()
    {
        return $this->hasMany(__CLASS__);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }

}
