<?php

namespace modules\Rayium\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Comment\Repositories\CommentRepo;
use modules\Rayium\Home\Repositories\HomeRepo;
use modules\Rayium\Post\Repositories\PostRepo;
use modules\Rayium\User\Repositories\AuthorRepo;

class HomeController extends Controller
{
    public PostRepo $repo;

    public function __construct(PostRepo $postRepo)
    {
        $this->repo = $postRepo;
    }

    public function index(HomeRepo $homeRepo, CategoryRepo $categoryRepo, CommentRepo $commentRepo, AuthorRepo $authorRepo){
        $categories = $categoryRepo->getActiveCategories()->get();
        $viewsPosts = $this->repo->getPostsByView()->latest()->limit(5)->get();
        $latestComment = $commentRepo->getLatestComments()->limit(5)->get();
        return view('Home::index', compact('homeRepo', 'categories', 'viewsPosts', 'latestComment', 'authorRepo'));
    }

    public function single($slug, HomeRepo $homeRepo, CategoryRepo $categoryRepo, CommentRepo $commentRepo)
    {
        $post = $this->repo->findBySlug($slug);
        if(is_null($post)) abort(404);
        $relatedPost = $this->repo->relatedPosts($post->category_id, $post->id)->limit(6)->get();
        $categories = $categoryRepo->getActiveCategories()->get();
        $viewsPosts = $this->repo->getPostsByView()->latest()->limit(5)->get();
        $latestComment = $commentRepo->getLatestComments()->limit(5)->get();
        return view('Home::Single.single', compact('post', 'homeRepo', 'relatedPost', 'categories', 'viewsPosts', 'latestComment'));
    }
}
