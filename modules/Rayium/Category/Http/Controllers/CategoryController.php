<?php

namespace modules\Rayium\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use modules\Rayium\Category\Http\Requests\CategoryRequest;
use modules\Rayium\Category\Models\Category;
use modules\Rayium\Category\Repositories\CategoryRepo;
use modules\Rayium\Category\Services\CategoryService;
use modules\Rayium\Home\Repositories\HomeRepo;
use modules\Rayium\Post\Repositories\PostRepo;

class CategoryController extends Controller
{
    public CategoryRepo $repo;
    public CategoryService $service;

    public function __construct(CategoryRepo $categoryRepo, CategoryService $categoryService)
    {
        $this->repo = $categoryRepo;
        $this->service = $categoryService;
    }

    public function index()
    {
        $this->authorize('index', Category::class);
        $categories = $this->repo->index()->paginate(10);
        return view('Category::index', compact('categories'));
    }

    public function create()
    {
        $this->authorize('index', Category::class);
        $category = $this->repo->index()->get();
        return view('Category::create', compact('category'));
    }

    public function store(CategoryRequest $request)
    {
        $this->authorize('index', Category::class);
        $this->service->store($request);

        $notification = array(
            'message' => 'دسته جدید با موفقیت ایجاد شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function edit($id)
    {
        $this->authorize('index', Category::class);
        $category = $this->repo->findById($id);
        $categories = $this->repo->index()->where('id', '!==', $category->id)->get();
        return view('Category::edit', compact(['category', 'categories']));
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->authorize('index', Category::class);
        $this->service->update($request, $id);

        $notification = array(
            'message' => 'دسته با موفقیت ویرایش شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function destroy($id)
    {
        $this->authorize('index', Category::class);
        $this->repo->delete($id);

        $notification = array(
            'message' => 'دسته با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('category.index')->with($notification);
    }

    public function changeStatus($id)
    {
        $this->authorize('index', Category::class);
        $category = $this->repo->findById($id);
        $this->repo->changeStatus($category);

        $notification = array(
            'message' => 'وضعیت دسته با موفقیت تغییر کرد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function single($slug, CategoryRepo $categoryRepo, PostRepo $postRepo, HomeRepo $homeRepo)
    {
        $category = $categoryRepo->findBySlug($slug);

        if (is_null($category)) abort(404);

        $posts = $postRepo->getPostsByCategoryId($category->id)->paginate(12);

        return view('Category::Home.index', compact(['category', 'posts', 'homeRepo']));
    }
}
