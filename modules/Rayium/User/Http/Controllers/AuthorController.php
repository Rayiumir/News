<?php

namespace modules\Rayium\User\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Comment\Repositories\CommentRepo;
use modules\Rayium\Home\Repositories\HomeRepo;
use modules\Rayium\Post\Repositories\PostRepo;
use modules\Rayium\User\Repositories\AuthorRepo;


class AuthorController extends Controller
{
    public PostRepo $repo;
    public AuthorRepo $repos;

    public function __construct(PostRepo $postRepo, AuthorRepo $authorRepo)
    {
        $this->repo = $postRepo;
        $this->repos = $authorRepo;
    }

    public function authors(HomeRepo $homeRepo, CommentRepo $commentRepo, CategoryRepo $categoryRepo)
    {
        $authors = $this->repos->authors()->paginate(50);
        $categories = $categoryRepo->getActiveCategories()->get();
        $viewsPosts = $this->repo->getPostsByView()->latest()->limit(5)->get();
        $latestComment = $commentRepo->getLatestComments()->limit(5)->get();
        return view('Home::parts.author', compact('authors', 'homeRepo', 'categories', 'viewsPosts', 'latestComment'));
    }

    public function author($name) {

        $author = $this->repos->findByName($name);
        return view('Home::Author.author', compact('author'));
    }

}
