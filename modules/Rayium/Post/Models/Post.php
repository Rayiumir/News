<?php

namespace modules\Rayium\Post\Models;

use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;

class Post extends Model implements Viewable
{
    use HasFactory, InteractsWithViews, Likeable;

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_PENDING = 'pending';

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_PENDING];

    public const TYPE_VIP = 'vip';
    public const TYPE_NORMAL = 'normal';
    public static array $types = [self::TYPE_VIP, self::TYPE_NORMAL];



}
