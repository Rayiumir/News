<?php

namespace modules\Rayium\Post\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use modules\Rayium\Category\Models\Category;
use modules\Rayium\Comment\Models\Comment;
use modules\Rayium\Comment\Trait\HaveComments;
use modules\Rayium\User\Models\User;
use Overtrue\LaravelLike\Traits\Likeable;

class Post extends Model implements Viewable
{
    use HasFactory, InteractsWithViews, Likeable, HaveComments;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'time_to_read',
        'imageName',
        'imagePath',
        'keywords',
        'description',
        'score',
        'body',
        'status',
        'type'
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_PENDING = 'pending';

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_PENDING];

    public const TYPE_VIP = 'vip';
    public const TYPE_NORMAL = 'normal';

    public static array $types = [self::TYPE_VIP, self::TYPE_NORMAL];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }

    public function cssStatus()
    {
        if ($this->status === self::STATUS_ACTIVE) return 'success';
        else if ($this->status === self::STATUS_INACTIVE) return 'danger';
        else return 'warning';
    }

    public function path()
    {
        return route('home.single', $this->slug);
    }

    public function getCommentCount()
    {
        if(is_null($this->comments))
        {
            return 0;
        }

        return $this->comments->count();
    }
}
