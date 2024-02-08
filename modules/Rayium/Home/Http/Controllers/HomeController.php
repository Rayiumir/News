<?php

namespace modules\Rayium\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Home\Repositories\HomeRepo;
use modules\Rayium\Post\Repositories\PostRepo;

class HomeController extends Controller
{
    public PostRepo $repo;

    public function __construct(PostRepo $postRepo)
    {
        $this->repo = $postRepo;
    }

    public function index(HomeRepo $homeRepo){
        return view('Home::index', compact('homeRepo'));
    }

    public function single($slug, HomeRepo $homeRepo)
    {
        $post = $this->repo->findBySlug($slug);
        if(is_null($post)) abort(404);
        $relatedPost = $this->repo->relatedPosts($post->category_id, $post->id)->limit(6)->get();
        return view('Home::Single.single', compact('post', 'homeRepo', 'relatedPost'));
    }
}
