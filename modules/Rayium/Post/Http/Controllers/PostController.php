<?php

namespace modules\Rayium\Post\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Post\Http\Requests\PostRequest;
use modules\Rayium\Post\Models\Post;
use modules\Rayium\Post\Repositories\PostRepo;
use modules\Rayium\Post\Services\PostService;

class PostController extends Controller
{
    public PostRepo $repo;
    public PostService $service;

    public function __construct(PostRepo $postRepo, PostService $postService)
    {
        $this->repo = $postRepo;
        $this->service = $postService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('index', Post::class);
        $posts = $this->repo->index()->paginate(10);
        return view('Post::index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CategoryRepo $categoryRepo)
    {
        $this->authorize('index', Post::class);
        $categories = $categoryRepo->getActiveCategories()->get();
        return view('Post::create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $this->authorize('index', Post::class);
        [$imageName, $imagePath] = $this->service->uploadImage($request->file('image'));
        $this->service->store($request, auth()->id(), $imageName, $imagePath);

        $notification = array(
            'message' => 'نوشته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, CategoryRepo $categoryRepo)
    {
        $this->authorize('index', Post::class);
        $post = $this->repo->findById($id);
        $categories = $categoryRepo->getActiveCategories()->get();
        return view('Post::edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, $id)
    {
        $this->authorize('index', Post::class);
        $post = $this->repo->findById($id);
        $file = $request->file('image');

        list($imageName, $imagePath) = $this->uploadImage($file, $post);

        $this->service->update($request, $id, $imageName, $imagePath);

        $notification = array(
            'message' => 'نوشته با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->authorize('index', Post::class);
        $post = $this->repo->findById($id);
        $this->service->deleteImage($post);
        $this->repo->delete($id);

        $notification = array(
            'message' => 'نوشته با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('posts.index')->with($notification);
    }

    /**
     * @param array|\Illuminate\Http\UploadedFile|null $file
     * @param $post
     * @return array
     */
    public function uploadImage($file, $post): array
    {
        if (!is_null($file)) {
            [$imageName, $imagePath] = $this->service->uploadImage($file);
        } else {
            $imageName = $post->imageName;
            $imagePath = $post->imagePath;
        }
        return array($imageName, $imagePath);
    }
}
