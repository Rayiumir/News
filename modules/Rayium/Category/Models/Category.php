<?php

namespace modules\Rayium\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

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
}
