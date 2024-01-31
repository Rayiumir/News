<?php

namespace modules\Rayium\Home\Repositories;

use modules\Rayium\Category\Models\Category;
use modules\Rayium\Post\Models\Post;
use modules\Rayium\Role\Models\Permission;
use modules\Rayium\User\Models\User;

class HomeRepo
{
    public function specials()
    {
        return Post::query()->where('status', Post::STATUS_ACTIVE)->whereType(Post::TYPE_VIP)->latest();
    }

    public function getActioveCategories()
    {
        return Category::query()->whereStatus(Category::STATUS_ACTIVE)->latest()->get();
    }

    public function getVipPostsOrderByView()
    {
        return Post::query()->whereType(Post::TYPE_VIP)->orderByViews()->latest()->limit(5)->get();
    }

    public function getAuthorUsers()
    {
        return User::query()->permission(Permission::PERMISSION_AUTHORS)->limit(10)->get();
    }

    public function getNewPosts()
    {
        return Post::query()->whereStatus(Post::STATUS_ACTIVE)->whereType(Post::TYPE_NORMAL)->latest()->paginate(10);
    }

    public function getNewPostSidebars()
    {
        return Post::query()->whereStatus(Post::STATUS_ACTIVE)->whereType(Post::TYPE_NORMAL)->latest()->limit(10)->get();
    }
}
