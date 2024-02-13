<?php

namespace modules\Rayium\Category\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use modules\Rayium\Post\Models\Post;
use modules\Rayium\User\Models\User;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_id',
        'title',
        'slug',
        'keywords',
        'description',
        'status'
    ];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_PENDING = 'pending';

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_PENDING];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    public function subCategories()
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function getCreateAtShamsi()
    {
        return new Verta($this->created_at);
    }

    public function getParent()
    {
        if(is_null($this->parent_id)) return 'ندارد';
        return $this->parentCategory->title;
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function path()
    {
        return route('categories.single', $this->slug);
    }
}
