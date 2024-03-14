<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Comment\Repositories\CommentRepo;
use modules\Rayium\Home\Repositories\HomeRepo;
use modules\Rayium\Post\Repositories\PostRepo;
use modules\Rayium\Role\Models\Permission;
use modules\Rayium\User\Repositories\AuthorRepo;


class AuthorController extends Controller
{
    public AuthorRepo $repo;
    public PostRepo $repos;

    public function __construct(PostRepo $postRepo, AuthorRepo $authorRepo)
    {
        $this->repo = $authorRepo;
        $this->repos = $postRepo;
    }

    public function authors($name, HomeRepo $homeRepo)
    {
        $authors = $this->repo->authors()->paginate(50);
        $author = $this->repo->findByName($name)->permission(Permission::PERMISSION_AUTHORS)->first();
        if (is_null($author)) abort('404');
        return view('Home::Author.author', compact('authors', 'homeRepo', 'author'));
    }

    public function author($name, HomeRepo $homeRepo, CommentRepo $commentRepo, CategoryRepo $categoryRepo, PostRepo $postRepo) {

        $author = $this->repo->findByName($name)->permission(Permission::PERMISSION_AUTHORS)->first();
        $categories = $categoryRepo->getActiveCategories()->get();
        $viewsPosts = $this->repos->getPostsByView()->latest()->limit(5)->get();
        $latestComment = $commentRepo->getLatestComments()->limit(5)->get();
        $posts = $postRepo->getPostsByUserId($author->id)->paginate(10);
        return view('Home::parts.author', compact('homeRepo', 'categories', 'viewsPosts', 'latestComment', 'author', 'posts'));
    }

}
